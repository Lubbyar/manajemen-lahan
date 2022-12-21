<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTanamanRequest extends FormRequest
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
            'lokasi'      => 'required',
            'dokumen'       => 'required',
            'jenis_tanah'   => 'required',
            'jenis_tanaman'      => 'required',
            'pemilik_tanaman'      => 'required',
            'petani_penggarap'    => 'required',
            'lintang_selatan'  => 'required',
            'bujur_timur'       => 'required'
            // 'keterangan' => 'required',
            // 'jenis_tanah' => 'required',
            // 'tanaman' => 'required',
            // 'sertifikat' => 'required',
            // 'ajb' => 'required',
            // 'lokasi' => 'required',
            // 'kwitansi' => 'required',
            // 'luas' => 'required',
            // 'status' => 'required',
            // 'tgl_jb' => 'required',
            // 'jualdari' => 'required',
            // 'jenis_tanah' => 'required',
            // 'jenis_tanam' => 'required',
            // 'pemilik_tanam' => 'required',
            // 'petani' => 'required',
            // 'diatas' => 'required',
            // 'kemiringan' => 'required'
        ];
    }
}
