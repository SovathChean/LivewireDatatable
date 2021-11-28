<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class IndexCategory extends Component
{
    public function render()
    {
        $categories = Category::all();
       
        return view('category.index', compact('categories'));
    }
}
