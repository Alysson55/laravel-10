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

    public function create()
    {
        return view ('/site/create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] =  'a';

        $support = $support->create($data);
        dd($support);

        // // dd($request->only(['token' , 'body']));
        // // dd($request->body);
        // dd($request->get('sbc'));

    }


}
