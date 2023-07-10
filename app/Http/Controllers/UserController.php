<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class UserController  extends Controller
{
    public $serach;

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mydata()
    {
        $user = Auth::user();
        return view('user.mydata', compact('user'));
    }

    public function index()
    {
       $user=User::all();
       return view('user.index', compact('user'));
    }
    public function serach(Request $request)
{
    $userId = 1;
    $users = User::where('id', $userId)->get();
    if ( $users==null) {
        return  redirect()->back();
    }

    $keyword = $request->input('keyword');
    $user = User::where('name', 'like', "%$keyword%")->orwhere('gender', 'like', "%$keyword%")
    ->orwhere('voitingRec', 'like', "%$keyword%")->orwhere('phoneNum', 'like', "%$keyword%")
    ->orwhere('idNum', 'like', "%$keyword%")->get();
    $userall=User::all();

    return view('user.serach')->with('user',$user)->with('user',$user)->with('userall',$userall);
}

public function edit(  $id)
{
    $user = User::all();

    return view('User.edit')->with('user',$user);

}

public function update(Request $request,  $id)
{
    $user = User::find( $id ) ;
    $request->validate([
        'gender' =>'required',
        'idNum' =>'required',
        'phoneNum'=>'required',
        'name'=>'required',
        'voitingRec'=>'required',

    ]);

 //   dd($request->all());


$post->title = $request->title;
$post->content = $request->content;
$post->save();
$post->tag()->sync($request->tags);
return redirect()->back() ;

}



    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'gender' =>'required',
            'idNum' =>'required|max:255',
            'phoneNum'=>'required|max:255',
            // 'name'=>'required',
            'voitingRec'=>'required',

        ]);

        $user = Auth::user();

        $user->update([
            'gender' => $request->input('gender'),
            'idNum' => $request->input('idNum'),
            'voitingRec' => $request->input('voitingRec'),
            'phoneNum' => $request->input('phoneNum'),
        ]);
        return view('user.index');
    }

}
