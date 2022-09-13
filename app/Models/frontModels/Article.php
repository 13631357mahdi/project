<?php

namespace App\Models\frontModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','slug','status','description'
    ];
    protected $attributes=[
        'hit' => 1
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments()
    {
        return $this->hasmany(Comment::class);
    }
}
