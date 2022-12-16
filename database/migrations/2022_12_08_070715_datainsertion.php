<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $date=Carbon::now();
        DB::table('category')->insert(
            array(
                ['name' => 'food','created_at'=>$date,'updated_at'=>$date]
            )
        );
    //     DB::table('recipe')->insert(
    //         array(
    //             [
    //             'name' => 'Chorizo & Mozzarella gnocchi bake',
    //             'description' => 'Upgrade cheesy tomato pasta with gnocchi, chorizo and mozzarella for a comforting bake that makes an excellent midweek meal',
    //             'instructions' => 'STEP 1 Heat the oil in a medium pan over a medium heat. Fry the onion and garlic for 8-10 mins until soft. Add the chorizo and fry for 5 mins more. Tip in the tomatoes and sugar, and season. Bring to a simmer, then add the gnocchi and cook for 8 mins, stirring often, until soft. Heat the grill to high. STEP 2 Stir ¾ of the mozzarella and most of the basil through the gnocchi. Divide the mixture between six ovenproof ramekins, or put in one baking dish. Top with the remaining mozzarella, then grill for 3 mins, or until the cheese is melted and golden. Season, scatter over the remaining basil and serve with green salad.',
    //             'img' => 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/gnocchi-1d16725.jpg',
    //             'category_id' => '1',
    //             'created_at'=>$date,
    //             'updated_at'=>$date,
    //             'users_id'=>'1'
    //             ],

    //             [
    //             'name' => 'American pancakes',
    //             'description' => 'Easy, American-style, fluffy pancakes are great for feeding a crowd at breakfast or brunch. Top with something sweet like fruit, jam or syrup, or rashers of crispy bacon.',
    //             'instructions' => 'STEP 1
    //             Mix 200g self-raising flour, 1 ½ tsp baking powder, 1 tbsp golden caster sugar and a pinch of salt together in a large bowl.
                
    //             STEP 2
    //             Create a well in the centre with the back of your spoon then add 3 large eggs, 25g melted butter and 200ml milk.
                
    //             STEP 3
    //             Whisk together either with a balloon whisk or electric hand beaters until smooth then pour into a jug.
                
    //             STEP 4
    //             Heat a small knob of butter and 1 tsp of oil in a large, non-stick frying pan over a medium heat. When the butter looks frothy, pour in rounds of the batter, approximately 8cm wide. Make sure you don’t put the pancakes too close together as they will spread during cooking. Cook the pancakes on one side for about 1-2 mins or until lots of tiny bubbles start to appear and pop on the surface. Flip the pancakes over and cook for a further minute on the other side. Repeat until all the batter is used up.
                
    //             STEP 5
    //             Serve your pancakes stacked up on a plate with a drizzle of maple syrup and any of your favourite toppings.',
    //             'img' => 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/american-style-pancakes-87119e3.jpg?quality=90&webp=true&resize=300,272',
    //             'category_id' => '1',
    //             'created_at'=>$date,
    //             'updated_at'=>$date,
    //             'users_id'=>'1'
    //             ]
    //         )
    //     );
    //     DB::table('measure')->insert(
    //         array(
    //            [ 'name' => 'tablespoon/s','created_at'=>$date,'updated_at'=>$date]
    //         )
    //     );
    //     DB::table('ingredient_group')->insert(
    //         array(
    //             ['main_group' => '1mg', 'sub_group' => '1sg','created_at'=>$date,'updated_at'=>$date],
    //             ['main_group' => '2mg', 'sub_group' => '2sg','created_at'=>$date,'updated_at'=>$date],
    //             ['main_group' => '3mg', 'sub_group' => '3sg','created_at'=>$date,'updated_at'=>$date],
    //             ['main_group' => '4mg', 'sub_group' => '4sg','created_at'=>$date,'updated_at'=>$date],
    //             ['main_group' => '5mg', 'sub_group' => '5sg','created_at'=>$date,'updated_at'=>$date],
    //             ['main_group' => '6mg', 'sub_group' => '6sg','created_at'=>$date,'updated_at'=>$date],
    //             ['main_group' => '7mg', 'sub_group' => '7sg','created_at'=>$date,'updated_at'=>$date],
    //             ['main_group' => '8mg', 'sub_group' => '8sg','created_at'=>$date,'updated_at'=>$date],
    //             ['main_group' => '9mg', 'sub_group' => '9sg','created_at'=>$date,'updated_at'=>$date],
    //             ['main_group' => '10mg', 'sub_group' => '10sg','created_at'=>$date,'updated_at'=>$date],


    //         )
    //     );
    //     DB::table('ingredient')->insert(
    //         array(
    //             ['name' => 'olive oil', 'ingredient_group_id' => 1,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'onion', 'ingredient_group_id' => 2,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'garlic cloves', 'ingredient_group_id' => 3,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'chorizo', 'ingredient_group_id' => 4,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'tomatoes', 'ingredient_group_id' => 5,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'caster sugar', 'ingredient_group_id' => 6,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'fresh gnocchi', 'ingredient_group_id' => 7,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'mozzarella ball', 'ingredient_group_id' => 8,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'bunch of basil', 'ingredient_group_id' => 9,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'green salad', 'ingredient_group_id' => 10,'created_at'=>$date,'updated_at'=>$date],

    //             ['name' => 'self-raising flour', 'ingredient_group_id' => 10,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'baking powder', 'ingredient_group_id' => 10,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'golden caster sugar', 'ingredient_group_id' => 10,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'large eggs', 'ingredient_group_id' => 10,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'melted butter', 'ingredient_group_id' => 10,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'milk', 'ingredient_group_id' => 10,'created_at'=>$date,'updated_at'=>$date],
    //             ['name' => 'vegetable oil', 'ingredient_group_id' => 10,'created_at'=>$date,'updated_at'=>$date],

    //         )
    //     );
    //     DB::table('recipe_ingredient')->insert(
    //         array(
    //             ['amount' => 1,'recipe_id' => 5,'ingredient_id' => 1,'measure_id' => 1,'created_at'=>$date,'updated_at'=>$date]
    //         )
    //     );
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
