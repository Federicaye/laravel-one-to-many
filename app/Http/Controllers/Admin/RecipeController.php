<?php

namespace App\Http\Controllers\Admin;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;


class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$ingredients = Ingredient::all();
        $recipes = Recipe::all();
        $cathegories = Category::all();
        return view('admin.recipes.index', compact('recipes', 'ingredients', 'cathegories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();

        return view('admin.recipes.create', compact('categories', 'ingredients'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'prep_time' => 'nullable|max:250',
            'instructions' => 'nullable|max:600'
        ]);
        
        $form_data['slug'] = Recipe::generateSlug($form_data['name']);
       $new_recipe = Recipe::create($form_data);
        if ($request->has('ingredients')) {
            $new_recipe->ingredients()->attach($request->ingredients);
        } 
        
        return redirect()->route('admin.recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();
        return view('admin.recipes.create', compact('categories', 'ingredients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
