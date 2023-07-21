<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataNilaiSantriUpdateRequest extends FormRequest
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
            'nama_santri'  => 'required|exists:App\User,id',
            'baca_alquran'  => 'sometimes|numeric|min:0|max:100',
            'sholat'  => 'sometimes|numeric|min:0|max:100',
            'tahfidz'  => 'sometimes|numeric|min:0|max:100',
            'ujian_tulisan'  => 'sometimes|numeric|min:0|max:100',
            'status_kelulusan'  => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nama_santri.required' => 'Santri harus dipilih',
            'exists.required' => 'Santri tidak terdaftar',

            'baca_alquran.required' => 'Data nilai baca quran wajib diisi',
            'baca_alquran.numeric' => 'Data nilai baca quran harus angka',
            'baca_alquran.min' => 'Data nilai baca quran minimal 0',
            'baca_alquran.min' => 'Data nilai baca quran maximal 100',

            'sholat.required' => 'Data nilai sholat wajib diisi',
            'sholat.numeric' => 'Data nilai sholat harus angka',
            'sholat.min' => 'Data nilai sholat minimal 0',
            'sholat.min' => 'Data nilai sholat maximal 100',

            'tahfidz.required' => 'Data nilai tahfidz wajib diisi',
            'tahfidz.numeric' => 'Data nilai tahfidz harus angka',
            'tahfidz.min' => 'Data nilai tahfidz minimal 0',
            'tahfidz.min' => 'Data nilai tahfidz maximal 100',

            'ujian_tulisan.required' => 'Data nilai ujian tulisan wajib diisi',
            'ujian_tulisan.numeric' => 'Data nilai ujian tulisan harus angka',
            'ujian_tulisan.min' => 'Data nilai ujian tulisan minimal 0',
            'ujian_tulisan.min' => 'Data nilai ujian tulisan maximal 100',

            // 'status.required' => 'Status harus diisi',
            // 'status.required' => 'Status harus diisi',
        ];
    }
}
