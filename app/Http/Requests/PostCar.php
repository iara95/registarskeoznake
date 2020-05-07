<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tip_vozila',
            'marka',
            'model',
            'godina_proizvodnje',
            'osig_kuca',
            'broj_police',
            'reg_oznaka'
        ];
    }
}
