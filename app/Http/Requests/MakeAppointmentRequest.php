<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MakeAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'customer_id' => 'required|integer',
            'vehicle_id' => 'required|integer',
            'appointment_date' => 'required|date',
            'status' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'cost' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'selected_repair_types' => 'required|array',
            'selected_repair_types.*' => 'required|integer',
        ];

        return $rules;
    }
}
