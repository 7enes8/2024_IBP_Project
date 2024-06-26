<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Comment;
use App\Models\Profiles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Appointment::where('user_id',Auth::user()->id)->get();
        $comments = Comment::where('user_id',Auth::user()->id)->get();
        $user = User::first();
        $profiles = Profiles::first();
        return view('home.user.index', [
            'user'=>$user,
            'profiles'=>$profiles,
            'comments' => $comments,
            'data' => $data,
            
        ]);
    }

    public function reviews()
    {
        $comments = Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments' ,[
            'comments' => $comments,
        ]);
    }

    public function appointment()
    {
        $data = Appointment::where('user_id','=',Auth::id())->get();
        return view('home.user.appointments' ,[
            'data' => $data,
        ]);
    }

    public function cancelappointment($id)
    {
        //
        $data=Appointment::find($id);
        $data->status = 'Cancelled';
        $data->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function saveprofile(Request $request, $id)
    {
        $data= Profiles::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->save();
        return redirect(route('user.profile'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reviewdestroy($id)
    {
        $data = Comment::find($id);
        $data->delete();
        return redirect(route('userpanel'));
    }
}
