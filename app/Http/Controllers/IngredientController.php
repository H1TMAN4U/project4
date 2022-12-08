<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
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
        $contents= array();
        $rules = [
            'start' => 'required|integer',
            'lenght' => 'required|integer',
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator()->fails()){
            $contents = array("msg"=>$validator->errors());
            $status=400;
        }
        else{
            $draw = $request->input('draw');
            $skip = $request->input('start');
            $limit = $request->input('lenght');
            $search = $request->input('search');
            $searchKey = $request->input('value');
            $order = $request->input('order');
            $columns = $request->input('columns');
            $orderColumn = $columns[$order[0]['column']]['data'];
            $orderType = $order[0]['dir'];
            try{
                // $rowData = Ingredient::select('id','name', '')
                // https://www.youtube.com/watch?v=E9DclSBQPjQ&list=PLkv5waWxmxmpmQMzNRyWU7GzQgKc3nIdj&index=4&ab_channel=StudentTutorial
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        //
    }
}
