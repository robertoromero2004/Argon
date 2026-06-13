<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'card_id' => 'required|string|max:14|min:14|unique:suppliers,card_id',
            'phone_number' => 'required|string|max:8|min:8|unique:suppliers,phone_number',
            'company_name' => 'required|string|max:25',
            'nationality' => 'required|in:string,nicaraguan,honduran,cuban,venezolan,haitian',
            'email_address' => 'required|string|max:30|unique:suppliers,email_address',
            'physical_address' => 'required|string|max:50|unique:suppliers,physical_address',
            
        ];
    }
}
