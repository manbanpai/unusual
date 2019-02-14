<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Resources\Tag as TagResources;

class TagController extends Controller
{
    /* 修改标签 */
    public function update()
    {

    }

    /* 删除标签 */
    public function delete()
    {

    }

    /* 添加标签 */
    public function add(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:tag'
        ]);
    }

    public function select()
    {
        return (TagResources::collection(Tag::paginate(2)))
                    ->response()
                    ->header('X-Value', 'True');
    }

    /* 标签详情 */
    public function show($id)
    {
        return new TagResources(Tag::find($id));
    }
}
