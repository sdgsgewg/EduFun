<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $table = 'writers';
    protected $guarded = ['id'];

    public function categories() {
        return $this->hasMany(Category::class);
    }

    public function getRouteKeyName(): string
    {
        return 'username';
    }
}
