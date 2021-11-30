<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class View extends Component
{
    public Category $category;
    public function render()
    {
        return view('livewire.category.view')->extends('layouts.app');
    }
}
