<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortoReq extends FormRequest
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
            'nama_aplikasi' => ['required'],
            'tahun_pembuatan' => ['required'],
            'created_by' => ['required'],
            'kategori' => ['required'],
            'klien' => ['required'],
            'link_demo' => ['required'],
            'keterangan' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
