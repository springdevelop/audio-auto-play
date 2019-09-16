<?php

namespace App\Http\Requests\Api;

class TroubleUpdateRequest extends BaseRequest
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
            'name' => 'required|max:20',
            'devices_id' => 'required',
        ];
    }

    public function messages()
    {
        return array_merge(parent::messages(), [
            'required' => config('code.trouble.field_required'),
        ]);
    }
}
