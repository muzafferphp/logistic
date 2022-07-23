<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TruckStore extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'company_name' => 'required',
			'postal_address' => 'required',
			'abn' => 'required',
			'contact_number' => 'required',
			'phone_number' => 'required',
			'email' => 'required',
			'key_contact' => 'required',
			'truck_type' => 'required',
			'dry_reefer' => 'required',
			'insurance_number' => 'required',
			'permit_type' => 'required',
        ];
    }
}
