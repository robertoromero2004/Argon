<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'card_id' => 'required|string|max:14|unique:employees,card_id',
            'phone_number' => 'required|string|max:8|unique:employees,phone_number',
            'driver_licence' => 'required|string|max:14|unique:employees,driver_licence',
            'nationality' => 'required|in:Nicaraguan,Honduran,Cuban,Venezolan,Haitian',
            'role' => 'required|string|max:20',
            'hire_date' => 'required|date',
            'education_level' => 'required|string|max:50',
            'marital_state' => 'required|in:Single,Married,Divorced,Widowed',
        ];
    }
}
