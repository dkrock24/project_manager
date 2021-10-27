<?php

namespace App\Http\Requests;

use App\Models\Currency;
use App\Rules\AllExistsRule;
use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
            'currency_id' => ['integer','required','exists:'.Currency::class.',id'],
            'flag' => ['required', 'string'],
            'status' => ['required', 'integer'],
        ];
    }
}
