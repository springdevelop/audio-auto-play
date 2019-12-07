<?php

namespace App\Http\Requests\Api;

class DeviceUpdateRequest extends BaseRequest
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
            'code' => 'required|max:20',
            'name' => 'required|max:20',
            'positions_id' => 'required',
            'users_id' => 'required',
            'groups_id' => 'required',
        ];
    }

    public function messages()
    {
        return array_merge(parent::messages(), [
            'required' => config('code.device.field_required'),
        ]);
    }
}
