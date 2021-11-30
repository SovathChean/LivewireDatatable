<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Edit extends Component
{
    public Product $product;
    public function render()
    {
        $categories = DB::table('categories')->pluck("name", "id");
        return view('livewire.product.edit', compact('categories'))->extends('layouts.app');
    }
    public function update()
    {
        $this->validate($this->rules());

        $this->product->save();

        msg_success('Product has been successfully updated.');

        return redirect()->route('product.index');
    }
    protected function rules()
    {
        return [
            'product.name' => [
                'required',
                'string',
                'max:255'
            ],
            'product.description' => [
                'max:255'
            ],
        ];
    }
}
