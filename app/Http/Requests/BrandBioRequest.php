<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandBioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'company_name' => 'required',
            'npwp'=> 'required',
            'profil_pic_path' => 'image|mimes:png,jpg,jpeg,svg|max:10240',
            'addres'=> 'required',
            'phone_number'=> 'required',
            'website'=> 'required',
            'province_id'=> 'required',
            'category_id'=> 'required',
        ];
    }
}
