<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
       
        return view('category.index', compact('categories'));
    }
    public function create()
    {
        // $category->create();

        return view('category.add');
    }
}
