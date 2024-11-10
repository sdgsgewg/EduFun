<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDetail;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home() {
        $categories = Category::all();
        $category_details = CategoryDetail::latest()->get();

        return view('home', [
            'categories' => $categories,
            'category_details' => $category_details
        ]);
    }

    public function about() {
        $categories = Category::all();
        
        return view('about', [
            'categories' => $categories
        ]);
    }

    public function popular() {
        $categories = Category::all();
        $category_details = CategoryDetail::paginate(3);

        return view('popular', [
            'categories' => $categories,
            'category_details' => $category_details
        ]);
    }
}
