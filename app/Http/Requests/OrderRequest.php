<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'customer_name' => [],
            'product_id' => ['required'],
            'quantity' => ['required', 'integer'],
            'total' => ['required', 'integer'],
        ];
    }
}
