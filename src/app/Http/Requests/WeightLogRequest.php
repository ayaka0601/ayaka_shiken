<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeightLogRequest extends FormRequest
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
            'weight_log_date' => 'required',
            'weight_log_weight' => 'required|integer|max:4|decimal',
            'weight_log_calories' => 'required|integer',
            'weight_log_exercise_time' => 'required',
            'weight_log_exercise_content' => 'max:120'
        ];
    }

    public function messages()
    {
        return [
            'weight_log_date.required' => '日付の入力をしてください',
            'weight_log_weight.required' => '体重を入力してください',
            'weight_log_weight.integer' => '数字で入力してください',
            'weight_log_weight.max' => '4桁までの数字で入力してください',
            'weight_log_weight.decimal' => '小数点は1桁で入力してください',
            'weight_log_calories.required' => '摂取カロリーを入力してください',
            'weight_log_calories.integer' => '数字で入力してください',
            'weight_log_exercise_time.required' => '運動時間を入力してください',
            'weight_log_exercise_content.max' => '120文字以内で入力してください',
        ];
    }
}
