<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // タイトルの必須&文字列&40字以内チェック
            'post.title' => 'required|string|max:40',
            // 本文の必須入力&文字列&4000字以内チェック
            'post.body' => 'required|string|max:4000',
        ];
    }
}
