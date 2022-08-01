<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'color', 'memory', 'model', 'brand'
    ];
    public function Categories()
    {
        return $this->blongsToMany(Category::class);
    }
}
