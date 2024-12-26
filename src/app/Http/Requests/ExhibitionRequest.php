<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'product_name' =>'required',
            'product_price' => 'required|integer|between:0',
            'product_image' => 'required|mimes:png,jpeg',
            'product_description' =>'required|max:255',
            'product_category' => 'required',
            'product_condition' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => '商品名を入力してくださいください',
            'product_price.required' => '値段を入力してください',
            'product_price.integer' => '数値で入力してください',
            'product_price.between:0' => '0円以上で入力してください',
            'product_image.required' => '商品画像を登録してください',
            'product_image.mimes:png,jpeg' => '「.png」または「.jpeg」形式でアップロードしてください',
            'product_description.required' => '商品説明をしてください',
            'product_description.max:255' => '255文字以内で入力してください',
            'product_category.required' => '商品のカテゴリーを選択してください',
            'product_condition.required' => '商品の状態を選択してください',

        ];
    }
}
