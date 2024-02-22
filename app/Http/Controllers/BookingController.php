<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;
use App\Http\Requests\BookingRequest;
use App\Models\Sewa;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use  Carbon\Carbon;

class BookingController extends Controller
{
    public function booking_lapangan($id)
    {
        $data = [
            'title' => 'Booking lapangan',
            'lapangan' => Lapangan::findOrFail($id),
        ];
        return view('pages.lapangan.booking', $data);
    }

    public function submit_booking(BookingRequest $request, $id)
    {
        // Validasi data yang diinput oleh user
        $data = $request->all();

        $data = new Sewa();
        $data->tanggal_main = Carbon::createFromFormat('l, d-F-Y', $request->tanggal_main)->toDateString();
        $data->jam_main = implode(" ", $request->jam_main);
        $data->uang_muka = $request->uang_muka;
        $data->durasi_main = count($request->jam_main);
        $data->status = 'booked';
        $data->user_id = auth()->user()->id;
        $data->lapangan_id = $id;
        $data->save();

        return redirect('dashboard')->with('success', 'Berhasil memesan lapangan');
    }
}
