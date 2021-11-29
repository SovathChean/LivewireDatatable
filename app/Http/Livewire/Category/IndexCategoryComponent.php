<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class IndexCategoryComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
       
        return view('livewire.category.index', compact('categories'))->extends('layouts.app');
    }
}
