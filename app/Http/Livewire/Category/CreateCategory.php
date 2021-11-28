<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;


class CreateCategory extends Component
{
    public function render()
    {
        return view('category.add');
    }
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => ['require', 'string'],
            'description' => ['string']
        ]);
        Category::create($input);

        msg_success('User has been successfully created.');

        return redirect()->route('category.index');
    }
}
