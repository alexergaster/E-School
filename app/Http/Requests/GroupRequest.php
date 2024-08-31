<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:15',
            'lesson_day' => 'string|max:12',
            'start_time' => 'string',
            'audience' => 'string|max:10',
            'teacher_id' => 'required|integer|exists:staff,id',
            'program_id' => 'required|integer|exists:programs,id',
        ];
    }
}
