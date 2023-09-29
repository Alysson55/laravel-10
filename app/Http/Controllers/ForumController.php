<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ForumController;
use App\Models\Support;

class ForumController extends Controller
{
    public function index(Support $support)
    {




        // $supports = $support->all();
        // dd($supports);

        // return view('index', [
        //     'supports' => $supports
        // ]);

        $supports = $support->all();
        // dd($supports);

        return view('/site/index', compact('supports',));
    }
}
