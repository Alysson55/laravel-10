<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSupport;
use Illuminate\Http\Request;
use App\Models\Support;

class ForumController extends Controller
{
    public function index(Support $support)
    {
        
        $supports = $support->all();
        return view('/site/index', compact('supports',));
    }

    public function create()
    {
        return view ('/site/create');
    }

    public function show (string|int $id)
    {
        // dd($id);
        // $support = Support::find($id);
        // dd($support);
        // support::find($id);
        // Support::where('id', '=',  $id)->first();
        if (!$support = Support::find($id)) {
            return back();
        }
        // dd($support->subject);

        return view('/support/show', compact('support'));
        
    }

    public function store(StoreUpdateSupport $request)
    {
        $data = $request->all();
        $data['status'] =  'a';

        $support = Support::create($data);
        
       
    }


}
