<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LapanganRequest;
use App\Models\Lapangan;
use App\Models\CategoryField;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'List Lapangan',
            'lapangan' => Lapangan::orderBy('id', 'asc')->get(),
        ];

        return view('backend.lapangan.index', $data);
    }

    public function welcome_page()
    {
        $lapangan = Lapangan::orderBy('id', 'asc')->get();

        return view('welcome',compact('lapangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Lapangan',
            'category' => CategoryField::orderBy('id', 'asc')->get(),
        ];

        return view('backend.lapangan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LapanganRequest $request)
    {
        $data = $request->all();

        // upload gambar
        $image = $request->file('gambar');
        $image->storeAs('public/lapangans', $image->hashName());

        $data = new Lapangan();
        $data->nama_lapangan = $request->nama_lapangan;
        $data->gambar = $image->hashName();
        $data->category_id = $request->category_id;
        $data->status = $request->status;
        $data->harga_sewa_siang = $request->harga_sewa_siang;
        $data->harga_sewa_malam = $request->harga_sewa_malam;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect()
            ->route('lapangan.index')
            ->with('success', 'Lapangan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit Data Lapangan';
        $data['category'] = CategoryField::orderBy('id', 'asc')->get();
        $data['lapangan'] = Lapangan::findOrFail($id);
        return view('backend.lapangan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lapangan' => 'required|min:3|max:100',
            'gambar' => 'image|mimes:png,jpg,jpeg|max:400',
            'category_id' => 'required',
            'status' => 'required',
            'harga_sewa_siang' => 'required|numeric',
            'harga_sewa_malam' => 'required|numeric',
            'deskripsi' => 'required|max:200',
        ]);

        if ($request->hasFile('gambar')) {
            # upload gambar baru
            $image = $request->file('gambar');
            $image->storeAs('public/lapangans/', $image->hashName());

            # delete gambar lama
            $data = Lapangan::findOrFail($id);
            $path = storage_path('app/public/lapangans/' . $data->gambar);
            if (File::exists($path)) {
                File::delete($path);
            }

            # update lapangan dg gambar baru
            $data = Lapangan::findOrFail($id);
            $data->nama_lapangan = $request->nama_lapangan;
            $data->gambar = $image->hashName();
            $data->category_id = $request->category_id;
            $data->status = $request->status;
            $data->harga_sewa_siang = $request->harga_sewa_siang;
            $data->harga_sewa_malam = $request->harga_sewa_malam;
            $data->deskripsi = $request->deskripsi;
            $data->update();
        } else {
            # update lapangan tanpa gambar
            $data = Lapangan::findOrFail($id);
            $data->nama_lapangan = $request->nama_lapangan;
            $data->category_id = $request->category_id;
            $data->status = $request->status;
            $data->harga_sewa_siang = $request->harga_sewa_siang;
            $data->harga_sewa_malam = $request->harga_sewa_malam;
            $data->deskripsi = $request->deskripsi;
            $data->update();
        }

        return redirect()
            ->route('lapangan.index')
            ->with('success', 'Lapangan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Lapangan::findOrFail($id);
        $data->delete();

        return redirect()
            ->back()
            ->with('success', 'Data berhasil dihapus');
    }
}
