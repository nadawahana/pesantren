<?php

namespace App\Http\Requests\Santri;

use Illuminate\Foundation\Http\FormRequest;

class DataCalonSantriRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama_lengkap'  => 'required|string',
            'nisn'          => 'required|numeric',
            'tempat_lahir'  => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenkel'        => 'required|in:laki-laki,perempuan',
            'asal_sekolah'  => 'required|string',
            'jalur_masuk'   => 'required|in:Asrama,Non_Asrama',
            'hp_ayah'       => 'required|string',
            'file_name'     => 'required|file', //max 2 mb ya bos
        ];
    }

    public function messages()
    {
        return [
            'nama_lengkap.required' => 'Inputan nama harus diisi',
        ];
    }
}
