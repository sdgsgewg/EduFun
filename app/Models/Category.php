<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $guarded = ['id'];

    public function details() {
        return $this->hasMany(CategoryDetail::class);
    }

    public function writer() {
        return $this->belongsTo(Writer::class);
    }
}
