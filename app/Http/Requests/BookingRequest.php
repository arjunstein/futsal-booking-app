<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'tanggal_main' => 'required|date',
            'user_id' => 'nullable',
            'lapangan_id' => 'nullable',
            'jam_main' => 'required',
            'uang_muka' => 'required',
            'durasi_main' => 'nullable',
            'status' => 'nullable',
        ];
    }
}
