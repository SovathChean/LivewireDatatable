<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Add extends Component
{
    public $product;
    public function render()
    {
        $categories = DB::table('categories')->pluck("name","id");
        return view('livewire.product.add', compact('categories'))->extends('layouts.app');
    }
    public function store()
    {
        $this->validate($this->rules());
      
        Product::create($this->product);

        msg_success('Product has been successfully created.');

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
            'product.categoryId' => [
                'required',
                'integer'
            ],
            'product.description' => [
                'max:255'
            ],
        ];
    }
}
