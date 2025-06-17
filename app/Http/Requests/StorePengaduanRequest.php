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
            'nama_pelapor' => 'required|string|max:255',
            'umur_pelapor' => 'nullable|integer|min:1',
            'pekerjaan_pelapor' => 'nullable|string|max:100',
            'alamat_pelapor' => 'nullable|string',
            'no_hp_pelapor' => 'required|string|max:20',
            'isi_laporan' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ];
    }
}
