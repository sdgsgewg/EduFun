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

    public function show(Writer $writer) {
        $categories = Category::all();
        $category = Category::where('writer_id', $writer->id)->get();
        $category_details = CategoryDetail::where('category_id', $category[0]['id'])->get();

        return view('writer.detail', [
            'categories' => $categories,
            'writer' => $writer,
            'category' => $category,
            'category_details' => $category_details,
        ]);
    }
}