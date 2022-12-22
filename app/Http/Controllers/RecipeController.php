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
        $data = Recipe::latest()->paginate(5);
        return view('myrecipe.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('myrecipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // $request->validate([
    //     'name'=>'required|name|unique:recipes',
    //     'description'=>'required',
    //     'instructions'=>'required',
    //     'img'=>'required|image|mimes:jpg,png,jpeg,gif,svg'
    // ]);
// why validate?, you validate before you send em, use javascript
    $file_name = time() . '.' . request()->img->getClientOriginalExtension();

    request()->img->move(public_path('images'), $file_name);

    $recipe = new Recipe;

    $recipe->name = $request->name;
    $recipe->description = $request->description;
    $recipe->instructions = $request->instructions;
    $recipe->img = $file_name;
    $recipe->category_id=1;
    // $recipe->users_id=Auth::user()->id;
    $recipe->users_id=1;
    $recipe->save();
    
    return redirect()->route('recipes.index')->with('success', 'recipe Added successfully.');
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
        return view('products.list',['recipe'=>$recipe,"ingredient"=>$ingredient]);
        return view('show', compact('recipe'));

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
        return view('myrecipe.edit', compact('recipe'));
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
                // $request->validate([
        //     'name'      =>  'required',
        //     'recipe_email'     =>  'required|email',
        //     'img'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        // ]);

        $img = $request->hidden_img;

        if($request->img != '')
        {
            $img = time() . '.' . request()->img->getClientOriginalExtension();

            request()->img->move(public_path('images'), $img);
        }
   

        $recipe = Recipe::find($request->hidden_id);
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->instructions = $request->instructions;
        $recipe->img = $img;

        $recipe->save();

        return redirect()->route('recipes.index')->with('success', 'recipe Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipes.index')->with('success', 'Student Data deleted successfully');
    }


    public function RecipeForm(){
        $categories=Category::all();
        return view("myrecipe.create",["categories"=>$categories]);
    }

    public function search()
    {
        $search_text=$_GET["query"];
        // $id=
        // $search_text = $request->query;
        $ingredients = Recipe::where('name','LIKE', '%'.$search_text.'%')->get();
        return view('products.search',["ingredients"=>$ingredients]);
    }
    // public function AddMyRecipe(Request $req){
    //     $created_at=Carbon::now()->toDateTimeString();
    //     $users_id= Auth::user()->id;
    //     $recipe = new Recipe;
    //     $recipe -> name=$req->name;
    //     $recipe -> description=$req->description;
    //     $recipe -> instructions=$req->instructions;
    //     $recipe -> img=$req->img;
    //     $recipe -> category_id=$req->category_id;
    //     $recipe -> created_at=$created_at;
    //     $recipe -> updated_at=$created_at;
    //     $recipe -> users_id = $users_id;
    //     $recipe -> save();
    //     return redirect('/myrecipes');
    // }
    public function UserRecipes(){
        $id=Auth::user()->id;
        $recipes=Recipe::where("users_id",$id)->get();
        // return dd($recipes);
        return view("myrecipe.MyRecipes",["recipe"=>$recipes]);
    }
    // public function delete($id){
    //     $recipes=Recipe::find($id);
    //     $recipes->delete();
    //     return redirect('/myrecipes');    
    // }
    // public function ShowData($id){
    //     $categories=Category::all();
    //     return view("Update",["categories"=>$categories]); 
    //     $recipes=Recipe::find($id);
    //     return view("Update",["recipe"=>$recipes]);
    // }
}
