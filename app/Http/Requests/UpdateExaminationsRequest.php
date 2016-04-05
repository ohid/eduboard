<?php

namespace Eduboard\Http\Requests;

use Eduboard\Http\Requests\Request;

class UpdateExaminationsRequest extends Request
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
            'examination' => ['required', 'min:3', 'unique:examinations,examination,'.$this->route('examination')]
        ];
    }
}
