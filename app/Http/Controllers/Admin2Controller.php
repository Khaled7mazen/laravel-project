<?php

namespace App\Http\Controllers;

use App\Admin2;
use Illuminate\Http\Request;
use Auth;

class Admin2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function allsuitables()
    {
       $adm=Admin2::all();
       return view('admin2.allsuitables', compact('adm'));
    }

    public function createsuitable()
    {
        $admin=Admin2::where('user_id',Auth::id())->first();
        if ( $admin==null) {
            return  redirect()->back();
        }
        return view('admin2.createsuitable');
    }

    public function storesuitable(Request $request)
    {
        $validatedData = $request->validate([
            'the_title' => 'required|max:255',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'required',
            // 'time_' => 'required',
            'geographical_location' => 'required',

        ]);

        // $image =$request->image;
        // $newimage=time(). $image->getClientOriginalName();
        // $image->move('uploads/project'.$newimage);
        $user=Auth::user();

        $admin=Admin2::create([
            'user_id' =>  $user->id,
            'the_title' =>$request->the_title,
            // 'image' =>'uploads/admin/'.$newimage,
            'details'=>$request->details,
            // 'time_'=>$request->time_,
            'geographical_location'=>$request->geographical_location,

        ]);
        $admin->save();
        return view('user.index');
    }

    public function destroy( $id)
    {
        $admin=Admin2::where('user_id',Auth::id())->first();
        if ( $admin==null) {
            return  redirect()->back();
        }

        $admin = Admin2::where('id' , $id )->first();

        $admin->delete($id);
        return redirect()->back() ;
    }

}
