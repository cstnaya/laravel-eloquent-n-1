<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}