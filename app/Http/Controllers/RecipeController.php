<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Ingredient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $recipe= Recipe::all();
        $ingredient=Ingredient::all();
        return view('products.list',
        [
            'recipe'=>$recipe,"ingredient"=>$ingredient
        ]
         );
    }
    public function IDrecipe($id){
    //  $recipe=Recipe::find($id);
    //  return dd($recipe);
        // return view("full-data",["recipes"=>$recipe]);
        $results = DB::table("recipe")->where('id',$id)->get();
        return view("FullRecipeData",["recipes"=>$results]);
        // return $results;
        // return dd($results);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }


    public function RecipeForm(){
        $categories=Category::all();
        return view("AddMyRecipe",["categories"=>$categories]);
    }

    public function search()
    {
        $search_text=$_GET["query"];
        // $id=
        // $search_text = $request->query;
        $ingredients = Recipe::where('name','LIKE', '%'.$search_text.'%')->get();
        return view('products.search',["ingredients"=>$ingredients]);
    }
    public function AddMyRecipe(Request $req){
        $created_at=Carbon::now()->toDateTimeString();
        $users_id= Auth::user()->id;
        $recipe = new Recipe;
        $recipe -> name=$req->name;
        $recipe -> description=$req->description;
        $recipe -> instructions=$req->instructions;
        $recipe -> img=$req->img;
        $recipe -> category_id=$req->category_id;
        $recipe -> created_at=$created_at;
        $recipe -> updated_at=$created_at;
        $recipe -> users_id = $users_id;
        $recipe -> save();
        return redirect('/list');
    }
    public function UserRecipes(){
        $id=Auth::user()->id;
        $recipes=Recipe::where("users_id",$id)->get();
        // return dd($recipes);
        return view("myrecipe.MyRecipes",["recipe"=>$recipes]);
    }
}
