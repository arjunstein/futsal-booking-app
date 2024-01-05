<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LapanganRequest extends FormRequest
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
            'nama_lapangan' => 'required|min:3|max:100',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:400',
            'category_id' => 'required',
            'status' => 'required',
            'harga_sewa_siang' => 'required|numeric',
            'harga_sewa_malam' => 'required|numeric',
            'deskripsi' => 'required|max:200'
        ];
    }
}
