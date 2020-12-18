<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingInput extends FormRequest
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
            'date'       => 'required|date_format:d M Y|date|after:yesterday',
            'time'       => 'required:numeric',
            'people'     => 'required:numeric',
            'first_name' => 'required|string:max255',
            'last_name'  => 'required|string:max255',
            'tel'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'      => 'required|unique:bookings',
            'comment'    => 'nullable|max:255',
        ];
    }
}
