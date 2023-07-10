<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createnews()
    {
        $admin=Admin::where('user_id',Auth::id())->first();
        if ( $admin==null) {
            return  redirect()->back();
        }
        return view('admin.createnews');
    }

    public function allnews()
    {
     $admin=Admin::all();

       return view('admin.allnews', compact('admin'));
    }

    public function storenews(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
        ]);

        $image =$request->image;
        $newimage=time(). $image->getClientOriginalName();
        $image->move('uploads/admin/',$newimage);

        $user=Auth::user();

        $admin=Admin::create([
            // 'member_id'=>$user->member()->id,
            'user_id' =>  $user->id,
            'description' =>$request->description,
            'image' =>'uploads/admin/'.$newimage,
            'title'=>$request->title,
        ]);
        $admin->save();
        return view('user.index');
    }

    public function destroy( $id)
    {
        $admin=Admin::where('user_id',Auth::id())->first();
        if ( $admin==null) {
            return  redirect()->back();
        }

        $admin = Admin::where('id' , $id )->first();

        $admin->delete($id);
        return redirect()->back() ;
    }
}
