<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;


class CreateCategoryComponent extends Component
{
    public $count =0;
    public $category;
    public function render()
    {
        return view('livewire.category.add')->extends('layouts.app');
    }
    public function store()
    {
        $this->validate();

        Category::create($this->category);

        msg_success('Category has been successfully created.');

        return redirect()->route('category.index');
    }
     /**
     * Validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'category.name' => [
                'required',
                'string',
                'max:255'
            ],
            'category.description' => [
                'max:255'
            ],
        ];
    }
}
