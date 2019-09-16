<?php

namespace App\Http\Requests\Api;

class CalendarUpdateRequest extends BaseRequest
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
            'audio' => 'required|max:20',
            'time_from' => 'required',
            'time_to' => 'required',
            'positions_id' => 'required',
            'users_id' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return array_merge(parent::messages(), [
            'required' => config('code.calendar.field_required'),
        ]);
    }
}
