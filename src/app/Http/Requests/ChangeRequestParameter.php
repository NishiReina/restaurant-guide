<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeRequestParameter extends FormRequest
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
            "name" => 'required',
            "phone" => 'required',
            "postcode" => 'required',
            "address" => 'required',
            "start_time" => 'required',
            "end_time" => 'required',
            "min_price" => 'required',
            "max_price" => 'required',
            "area_id" => 'required',
            "gunre_id" => 'required',
        ];
    }
}
