<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreSopLabRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->hasRole('admin lab');;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id_lokasi' => 'required|exists:lokasi,encrypt_id',
            'file_sop' => 'required|file|mimes:pdf|max:1060',
        ];
    }
    public function messages()
    {
        return [
            'id_lokasi.required' => 'Lokasi harus diisi',
            'id_lokasi.exists' => 'Lokasi tidak ditemukan',
            'file_sop.required' => 'File SOP harus diupload',
            'file_sop.file' => 'File SOP harus berupa file',
            'file_sop.mimes' => 'File SOP harus berupa file PDF',
            'file_sop.max' => 'File SOP maksimal 1MB',
        ];
    }
}
