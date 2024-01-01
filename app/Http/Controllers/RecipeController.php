<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateRecipeRequest;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("recipe.create", [
            "categories" => Category::all(),
            "themes" => Theme::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateRecipeRequest $request)
    {
        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->preparation = $request->preparation;
        $recipe->ingredients = $request->ingredients;
        $recipe->categories_id = $request->categories_id;

        $path = $request->file("image_path")->storeAs('imgRecipes', $this->makeName($request->title), 'public');
        $recipe->image_path = $path;

        if ($request->themes_id != 0) {
            $recipe->themes_id = $request->themes_id;
        }

        $recipe->save();

        return response()->json(['status' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe =  Recipe::find($id);
        $categories = Category::all();
        $themes = Theme::all();
        return view("recipe.show", [
            "recipe" => $recipe,
            "categories" => $categories,
            "themes" => $themes,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateRecipeRequest $request, string $id)
    {

        $recipe = Recipe::find($id);

        $recipe->title = $request->title;
        $recipe->preparation = $request->preparation;
        $recipe->ingredients = $request->ingredients;
        $recipe->categories_id = $request->categories_id;

        // Verificar se há um arquivo de imagem no formulário
        if ($request->hasFile("image_path")) {
            // Remover a imagem anterior se existir
            if ($recipe->image_path) {
                Storage::disk('public')->delete($recipe->image_path);
            }

            // Armazenar a nova imagem
            $path = $request->file("image_path")->storeAs('imgRecipes', $this->makeName($request->title), 'public');
            $recipe->image_path = $path;
        }

        $recipe->themes_id = $request->themes_id ?: null;

        $recipe->save();

        return response()->json(['status' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function makeName($name)
    {
        $newName = str_replace([' ', '/'], ['_', '_'], $name);
        $newName = uniqid() . '_' . $newName;
        return $newName;
    }
}
