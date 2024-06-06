<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    
    use HasFactory;
    protected $fillable = ['name', 'slug', 'category_id', 'prep_time', 'instructions', 'img'];
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function ingredients() {
        return $this->HasMany(Ingredient::class);
    }
}
