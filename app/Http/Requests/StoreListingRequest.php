<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'website' => 'nullable|url',
            'email' => 'required|email',
            'tags' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ];
    }
}
