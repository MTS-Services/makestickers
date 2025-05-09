<?php

namespace App\Http\Requests\AdminManage;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'gender' => 'required|integer',
            'role_id' => 'required|exists:roles,id',
        ] + ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store(): array
    {
        return [
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8|confirmed',
        ];
    }
    protected function update(): array
    {
        return [
            'email' => 'required|email|unique:admins,email,' . decrypt($this->route('admin')),
            'password' => 'nullable|string|min:8|confirmed',
        ];
    }
}
