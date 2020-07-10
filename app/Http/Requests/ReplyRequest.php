<?php

namespace App\Http\Requests;

/**
 * @property String content
 * Class ReplyRequest
 * @package App\Http\Requests
 */
class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }
}
