<?php

namespace Eduboard\Http\Requests;

use Eduboard\Http\Requests\Request;

class ResultCreateRequest extends Request
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
            'roll' => ['required', 'min:6', 'numeric', 'unique:results'],
            'name' => ['required', 'min:4'],
            'board' => ['required'],
            'fathers_name' => ['required', 'min:4'],
            'group' => ['required'],
            'mothers_name' => ['required', 'min:4'],
            'type' => ['required'],
            'birth' => ['required', 'min:4'],
            'result' => ['required', 'numeric'],
            'year' => ['required', 'numeric'],
            'institute' => ['required', 'min:4'],
            'examination' => ['required'],
            'bangla' => ['required', 'numeric'],
            'english' => ['required', 'numeric'],
            'math' => ['required', 'numeric'],
            'science' => ['required', 'numeric'],
            'religion' => ['required', 'numeric'],
            'int_to_busi' => ['required', 'numeric'],
            'accounting' => ['required', 'numeric'],
            'business_entre' => ['required', 'numeric'],
            'agriculture' => ['required', 'numeric'],
        ];
    }
}
