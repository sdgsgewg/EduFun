<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryDetail extends Model
{
    protected $table = 'category_detail';
    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
