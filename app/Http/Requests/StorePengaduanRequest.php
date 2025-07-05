<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePengaduanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Izinkan semua orang untuk membuat request ini
    }

    public function rules(): array
    {
        
        return [
            'nama_pelapor'      => 'required|string|max:255',
            'no_hp_pelapor'     => 'required|string|max:20',
            'umur_pelapor'      => 'nullable|integer|min:1',
            'pekerjaan_pelapor' => 'nullable|string|max:100',
            'alamat_pelapor'    => 'nullable|string',
            'isi_laporan'       => 'required|string',
            'latitude'          => 'required|numeric',
            'longitude'         => 'required|numeric',

            // [PERBAIKAN UTAMA DI SINI]
            'tujuan_polsek'     => 'required|string|max:255', // Diubah dari 'nullable' menjadi 'required'
            'nik'               => 'required|numeric|digits:16', // Diubah menjadi numeric dan harus pas 16 digit
            'foto_ktp'          => 'required|image|mimes:jpeg,png,jpg|max:2048', // Maks 2MB
            
        ];
        
    }
}
