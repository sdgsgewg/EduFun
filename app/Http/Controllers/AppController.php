<?php

namespace App\Http\Controllers;

use App\Models\CategoryDetail;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home() {
        $category_details = CategoryDetail::latest()->get();

        return view('home', [
            'category_details' => $category_details
        ]);
    }

    public function about() {
        return view('about');
    }

    public function popular() {
        $category_details = CategoryDetail::with('category')->paginate(3);

        return view('popular', [
            'category_details' => $category_details
        ]);
    }
}
