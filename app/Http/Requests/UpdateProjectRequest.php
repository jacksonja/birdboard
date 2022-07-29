<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateProjectRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'notes' => 'nullable',
        ];
    }

    public function authorize(): bool
    {
        return Gate::allows('update', $this->project());
    }

    public function project()
    {
        return $this->route('project');
    }
}
