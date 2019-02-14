<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function add(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);

        $category = new Category();
        $category->name = $request->get('name');
        $category->save();

        return response()->json([
            'data'=>['id'=>$category->id]
        ]);
    }
}
