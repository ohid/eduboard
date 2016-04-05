<?php

namespace Eduboard\Http\Requests;

use Eduboard\Http\Requests\Request;

class UpdateYearsRequest extends Request
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
            'year' => ['required', 'numeric', 'min:4', 'unique:years,year,'.$this->route('year')]
        ];
    }
}
