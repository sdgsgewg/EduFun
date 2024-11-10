<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDetail;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category) {
        $categories = Category::all();
        $category = Category::find($category->id);
        $category_details = CategoryDetail::where('category_id', $category->id)->get();

        return view('category.category', [
            'categories' => $categories,
            'category' => $category,
            'category_details' => $category_details
        ]);
    }

    public function show(CategoryDetail $cd) {
        $categories = Category::all();

        return view('category.detail', [
            'categories' => $categories,
            'cd' => $cd
        ]);
    }
}