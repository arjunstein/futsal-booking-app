<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;

class NonAdminLapanganController extends Controller
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

        return view('pages.lapangan.index', $data);
    }

    public function welcome_page()
    {
        $lapangan = Lapangan::orderBy('id', 'asc')->get();

        return view('welcome', compact('lapangan'));
    }

    public function get_futsal()
    {
        $data = [
            'title' => 'List Lapangan Futsal',
            'lapangan' => Lapangan::where('nama_lapangan', 'like', '%futsal%')->get(),
        ];

        return view('pages.lapangan.futsal', $data);
    }

    public function get_mini_soccer()
    {
        $data = [
            'title' => 'List Lapangan Futsal',
            'lapangan' => Lapangan::where('nama_lapangan', 'like', '%mini%soccer%')->get(),
        ];

        return view('pages.lapangan.mini_soccer', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'lapangan' => Lapangan::findOrFail($id),
            'title' => 'Detail lapangan',
        ];

        return view('pages.lapangan.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
