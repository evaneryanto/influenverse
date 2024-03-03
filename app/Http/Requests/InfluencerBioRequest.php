<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class InfluencerBioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|string|max:225',
            'province_id' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'about_me' => 'required',
            'address' => 'required',
            'is_married' => 'required',
            'phone_number' => 'required',
            'profile_picture_path' => 'image|mimes:png,jpg,jpeg,svg|max:10240',
            'categories' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required',
            'name.string' => 'The name field must be a string',
            'name.max' => 'The name field must be less than 255 characters',
            'birth_date.required' => 'The birth date field is required',
            'gender.required' => 'The gender field is required',
            'address.required' => 'The address field is required',
            'province_id.required' => 'The province field is required',
            'is_married.required' => 'The marriage status field is required',
            'about_me.required' => 'The about me field is required',
            'phone_number.required' => 'The phone_number field is required',
            'image.image' => 'The image field must be an image',
            'image.mimetypes' => 'The image field must be a jpg, png, or svg image',
            'image.max' => 'The image field must be less than 10MB',
        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                if ($validator->errors()->count() > 0) {
                    return redirect()->back()->withErrors($validator->errors());
                }
            }
        ];
    }


}
