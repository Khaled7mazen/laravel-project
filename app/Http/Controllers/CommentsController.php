<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

        $request->validate([
            'description' =>'required'

        ]);
        $input=$request->all();
        $input['user_id'] =auth()->user()->id;
        // $input['admin2_id'] =$this->admin2()->id;

        $comments=Comments::create($input);
        return back();
    }
       public function allcomment()
    {
     $comments=Comments::all();

       return view('comments.allcomment', compact('comments'));
    }
}
