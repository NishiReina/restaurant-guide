<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use App\Models\Shop;


class ShopRegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Shop::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'string', 'max:7'],
            'address' => ['required', 'string'],
            'start_time' => 'required',
            'end_time' => 'required',
            'min_price' => ['required', 'integer'],
            'max_price' => ['required', 'integer'],
            'area_id' => ['required', 'integer'],
            'gunre_id' => ['required', 'integer'],
            'img_url' => 'required',
            'title' => ['required', 'string'],
            'pr' => ['required', 'string'],
        ];
    }
}
