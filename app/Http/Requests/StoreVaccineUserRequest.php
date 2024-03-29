<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\VaccineUser;
use Illuminate\Validation\Rule;

class StoreVaccineUserRequest extends FormRequest
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
            'name'   => 'required|string|max:60',
            'nid'    => 'required|integer|max:20',
            'email'  => 'required|string|lowercase|email|max:200',
            'number' => 'required|max:20',
            'center_id' => 'required',
            'status' => 'required',
        ];
    }
}
