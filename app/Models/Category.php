<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $guarded = ['id'];
    protected $with = ['writer'];

    public function details() {
        return $this->hasMany(CategoryDetail::class);
    }

    public function writer() {
        return $this->belongsTo(Writer::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
