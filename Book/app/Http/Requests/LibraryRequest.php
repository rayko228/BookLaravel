<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LibraryRequest extends FormRequest
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
//            'name'   => 'required|min:4|max:40',
//            'arrangementOfGoods'   => 'required|integer',
//            'numberOfShelves'   => 'required|integer',
////            'wideAssortment'   => 'Boolean',
////            'availabilityOfaConsultant'   => 'Boolean',
//            'quantityOfGoods'   => 'required|integer',
////            'availabilityOfSeveralShelves'   => 'Boolean',
////            'presenceOfAProtectiveSideAgainstFalling'   => 'Boolean',
////            'sufficientLighting'   => 'Boolean',
////            'alarm'   => 'Boolean',
        ];
    }
}
