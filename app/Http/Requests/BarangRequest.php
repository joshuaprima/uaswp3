<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
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
        $rules = ['namabarang' => 'required|string|max:255',
                'idjenis' => 'required',
                'jumlah' => 'required',
                'idsupplier' => 'required',
                'foto' => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500'];

        return $rules;
    }
}

