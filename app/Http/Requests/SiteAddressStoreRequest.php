<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteAddressStoreRequest extends FormRequest
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
            'name' => 'required|unique:site_addresses|max:255',
            'address'  => 'required|unique:site_addresses'
        ];
    }
}
