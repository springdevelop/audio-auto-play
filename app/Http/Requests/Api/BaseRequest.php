<?php

namespace App\Http\Requests\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class BaseRequest extends FormRequest
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
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return Illuminate\Http\JsonResponse
     */
    public function response(array $errors)
    {
        $code = current($errors)[0];

        return api_errors($code, trans('messages.validate.invalid'), 422);
    }

    protected function failedValidation(Validator $validator) { 
        $errors = array_merge($validator->errors()->all(),['status' => false]);
        throw new HttpResponseException(response()->json($errors, 422)); 
    }

    public function messages()
    {
        return [];
    }
}
