<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
        'guest_name' => 'required|string|max:255',
        'phone' => 'required|string|max:30',
        'email' => 'required|string|max:30',
        'check_in' => 'required|date|after_or_equal:today',
        'check_out' => 'required|date|after:check_in',
        'room_type' => 'nullable|string|max:100',
        'price_per_night' => 'required|integer|min:0',
        'total_price' => 'required|integer|min:0',
        'status' => 'in:pending,confirmed,cancelled',
        'notes' => 'nullable|string|max:2000',
        ];
    }
}
