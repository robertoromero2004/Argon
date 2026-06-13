<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'license_plate' => 'required|string|max:20|unique:vehicles,license_plate',
            'model' => 'required|string|max:50',
            'brand' => 'required|string|max:50',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string|max:30',
            'capacity' => 'required|integer|min:1',
            'status' => 'required|in:available,unavailable,maintenance',
            'vehicle_type_id' => 'required|exists:vehicle_types,id',
        ];
    }
}
