<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function add(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'category' => 'required|integer'
        ]);

        $article = new Article();
        $article->title = $request->get('title');
        $article->content = $request->get('content');
        $article->author = $request->get('author','admin');
        $article->category = $request->get('category');
        $article->save();

        return response()->json([
            'data'=>['id'=>$article->id]
        ]);
    }
}
