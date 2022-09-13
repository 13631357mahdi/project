<?php

namespace App\Models\frontModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','description'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
