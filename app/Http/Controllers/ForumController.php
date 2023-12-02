<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSupport;
use Illuminate\Http\Request;
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

    public function store(StoreUpdateSupport $request)
    {
        $data = $request->all();
        $data['status'] =  'a';

        $support = Support::create($data);
        dd($support);

        // $support = $Support->create($data);
        // dd($support);

        // dd($request->only(['token' , 'body']));
        // dd($request->body);
        // dd($request->get('sbc'));

    }


}
