<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'List Member',
            'user' => User::orderBy('id', 'asc')->get(),
        ];

        return view('backend.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Buat member baru',
        ];
        return view('backend.user.create', $data);
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
            'name' => 'required|string|max:30|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|max:20',
            'roles' => 'required|in:admin,member',
            'whatsapp' => 'required|alpha_num|max:13|min:10',
            'address' => 'nullable|string|max:100|min:5',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'roles' => $request->roles,
            'whatsapp' => '62' . substr($request->whatsapp, 1),
            'address' => $request->address,
        ]);

        return redirect()
            ->route('user.index')
            ->with('info', 'Member berhasil dibuat');
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
            'title' => 'Edit member',
            'user' => User::find($id),
        ];

        return view('backend.user.edit', $data);
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
            'name' => 'required|string|max:30|min:3',
            'email' => 'email',
            'password' => 'nullable|string|min:8|max:20',
            'roles' => 'required|in:admin,member',
            'whatsapp' => 'required|alpha_num|max:13|min:10',
            'address' => 'nullable|string|max:100|min:5',
        ]);

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'roles' => $request->roles,
            'whatsapp' => '62' . substr($request->whatsapp, 1),
            'address' => $request->address,
        ]);

        return redirect()
            ->route('user.index')
            ->with('success', 'Member berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()
            ->back()
            ->with('success', 'Member berhasil dihapus');
    }
}
