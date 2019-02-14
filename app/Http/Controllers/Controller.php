<?php

namespace App\Http\Controllers;

use App\Models\Memorable;
use App\Models\Tag;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function tag()
    {
        $model = Tag::all()->toArray();
        $me = DB::table('memorable')->get();
        print_r($me);die;
    }
}
