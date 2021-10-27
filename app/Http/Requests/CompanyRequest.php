<?php

namespace App\Http\Requests;

use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => ['required','string'],
            'description' => ['required', 'string'],
            'country_id' => ['integer','required','exists:'.Country::class.',id'],
            'logo' => ['required', 'string'],
            'status' => ['required', 'integer'],
        ];
    }
}
