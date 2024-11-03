<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDetail;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index() {
        $writers = Writer::all();
        $categories = Category::all();

        return view('writer.writer', [
            'writers' => $writers,
            'categories' => $categories,
        ]);
    }

    public function show($w_id, $c_id) {
        $writer = Writer::find($w_id);
        $category = Category::find($c_id);
        $category_details = CategoryDetail::where('category_id', $c_id)->get();

        return view('writer.detail', [
            'writer' => $writer,
            'category' => $category,
            'category_details' => $category_details,
        ]);
    }
}
