<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $table = 'writers';
    protected $guarded = ['id'];

    public function categories() {
        return $this->hasMany(Category::class);
    }
}
