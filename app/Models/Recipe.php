<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Recipe extends Model
{
    
    use HasFactory;
    protected $fillable = ['name', 'slug', 'category_id', 'prep_time', 'instructions', 'img'];

    public static function generateSlug($name)
    {
        $slug = Str::slug($name, '-');
        $count = 1;
        while (Recipe::where('slug', $slug)->first()) {
            $slug = Str::of($name)->slug('-') . "-{$count}";
            $count++;
        }
        return $slug;}
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function ingredients() {
        return $this->HasMany(Ingredient::class);
    }
}
