<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class EditCategoryComponent extends Component
{
    public Category $category;
    public function render()
    {
       
        return view('livewire.category.edit')->extends('layouts.app');
    }
    public function update()
    {
        $this->validate($this->rules());

        $this->category->save();

        msg_success('Category has been successfully updated.');

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
