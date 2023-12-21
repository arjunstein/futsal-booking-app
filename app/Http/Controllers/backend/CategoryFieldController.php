<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryField;
use Exception;

class CategoryFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'List Kategori Lapangan',
            'fields' => CategoryField::orderBy('id', 'asc')->get(),
        ];

        return view('backend.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Buat Kategori Lapangan',
        ];

        return view('backend.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_field_name' => 'required|string|max:30|min:3',
        ]);

        $data = new CategoryField();
        $data->category_field_name = $request->category_field_name;
        $data->save();

        return redirect()
            ->route('category.index')
            ->with('success', 'Kategori lapangan berhasil dibuat');
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
        $data = [
            'title' => 'Edit Kategori Lapangan',
            'category' => CategoryField::findOrFail($id),
        ];

        return view('backend.category.edit', $data);
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
            'category_field_name' => 'required|string|max:30|min:3',
        ]);

        $data = CategoryField::findOrFail($id);
        $data->category_field_name = $request->category_field_name;
        $data->update();
        return redirect()
            ->route('category.index')
            ->with('success', 'Kategori lapangan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = CategoryField::findOrFail($id);
            $data->delete();

            return redirect()
                ->back()
                ->with('success', 'Data berhasil dihapus');

        } catch (\Throwable $th) {
            \Session::flash('gagal','Data tidak dapat dihapus, karena berelasi dengan data lapangan');
            return redirect()->back();
        }
    }
}
