<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersyaratanStoreRequest extends FormRequest
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
            'smt1_kelas5'       => 'sometimes|nullable|mimes:png,jpg,pdf',
            'smt2_kelas5'       => 'sometimes|nullable|mimes:png,jpg,pdf',
            'smt1_kelas6'       => 'sometimes|nullable|mimes:png,jpg,pdf',
            'ijazah'            => 'required|mimes:png,jpg,pdf',
            'KK'                => 'required|mimes:png,jpg,pdf',
            'akta_kelahiran'    => 'required|mimes:png,jpg,pdf',
            'KIP'               => 'required|mimes:png,jpg,pdf',
            'smt1_kls6'         => 'sometimes|nullable',
            'KIP'               => 'sometimes|nullable',
            'tingkat'           => 'sometimes|nullable',
            'penghargaan'       => 'sometimes|nullable',
            '1kls5_agama'       => 'sometimes|nullable|numeric',
            '1kls5_pkn'         => 'sometimes|nullable|numeric',
            '1kls5_bIndo'       => 'sometimes|nullable|numeric',
            '1kls5_mtk'         => 'sometimes|nullable|numeric',
            '1kls5_ipa'         => 'sometimes|nullable|numeric',
            '1kls5_senbud'      => 'sometimes|nullable|numeric',
            '1kls5_penjas'      => 'sometimes|nullable|numeric',
            '1kls5_rata2'       => 'sometimes|nullable|numeric',
            '2kls5_agama'       => 'sometimes|nullable|numeric',
            '2kls5_pkn'         => 'sometimes|nullable|numeric',
            '2kls5_bIndo'       => 'sometimes|nullable|numeric',
            '2kls5_mtk'         => 'sometimes|nullable|numeric',
            '2kls5_ips'         => 'sometimes|nullable|numeric',
            '2kls5_senbud'      => 'sometimes|nullable|numeric',
            '2kls5_penjas'      => 'sometimes|nullable|numeric',
            '1kls6_agama'       => 'sometimes|nullable|numeric',
            '1kls6_pkn'         => 'sometimes|nullable|numeric',
            '1kls6_bIndo'       => 'sometimes|nullable|numeric',
            '1kls6_mtk'         => 'sometimes|nullable|numeric',
            '1kls6_ipa'         => 'sometimes|nullable|numeric',
            '1kls6_ips'         => 'sometimes|nullable|numeric',
            '1kls6_senbud'      => 'sometimes|nullable|numeric',
            '1kls6_penjas'      => 'sometimes|nullable|numeric',
            '1kls6_rata2'       => 'sometimes|nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            '1kls5_agama.numeric' => 'Nilai semester 1 kelas 5 harus angka',
        ];
    }
}
