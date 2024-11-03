<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDetail;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id) {
        $category = Category::find($id);
        $category_details = CategoryDetail::where('category_id', $id)->get();

        return view('category.category', [
            'category' => $category,
            'category_details' => $category_details
        ]);
    }

    public function show($id, $cdSlug) {
        $category = Category::find($id);
        $categoryDetail = CategoryDetail::where('slug', $cdSlug)->firstOrFail();

        return view('category.detail', [
            'category' => $category,
            'cd' => $categoryDetail
        ]);
    }
}
