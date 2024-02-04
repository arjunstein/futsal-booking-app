<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;

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
}
