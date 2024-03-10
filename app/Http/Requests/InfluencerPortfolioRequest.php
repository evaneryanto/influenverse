<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfluencerPortfolioRequest extends FormRequest
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
            'influencer_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'platform' => 'required',
            'url' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'influencer_id.required' => 'The name field is required',
            'name.required' => 'The name field is required',
            'description.required' => 'The description field is required',
            'platform.required' => 'The platform field is required',
            'url.required' => 'The url field is required'
        ];
    }
}
