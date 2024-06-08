<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Comment;
use App\Models\Appointment;
use App\Models\Services;
use App\Models\Setting;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function maincategorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();

    }
    //
    public function index()
    {
        $page='home';
        $categorylist1=Category::limit(6)->get();
        $sliderdata=Services::limit(4)->get();
        $serviceslist1=Services::limit(6)->get();
        $setting = Setting::first();
        return view('home.index' ,[
            'page' => $page,
            'setting' => $setting,
            'sliderdata'=>$sliderdata,
            'serviceslist1'=>$serviceslist1,
            'categorylist1'=>$categorylist1
        ]);
    }

    public function about()
    {
        $setting = Setting::first();
        return view('home.about' ,[
            'setting' => $setting,
        ]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references' ,[
            'setting' => $setting,
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact' ,[
            'setting' => $setting,
        ]);
    }

    public function appointment()
    {
        
        $services=Services::all();
        $roles=RoleUser::where('role_id', '=', '2')->get();
        $lawyers = array();

        foreach($roles as $role){
            $lawyer=User::where('id','=',$role->user_id)->first();
            array_push($lawyers, $lawyer);
        }

        return view('home.appointment' ,[
            'services' => $services,
            'lawyers' => $lawyers,
            
        ]);
    }

    public function storeappointment(Request $request)
    {
        $data=new Appointment();
        $data->user_id=Auth::id();
        $data->services_id=$request->input('services');
        $data->lawyer_id=$request->input('lawyer_id');;
        $data->payment=false;
        $data->date=$request->input('date');
        $data->time=$request->input('time');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('appointment')->with('info','Your Appointment Has Been Sent, Thank you.');

    }


    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq' ,[
            'setting' => $setting,
            'datalist' => $datalist,
        ]);
    }

    public function storemessage(Request $request)
    {
        $data=new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your Message Has Been Sent, Thank you.');

    }

    public function storecomment(Request $request)
    {
        $data=new Comment();
        $data->user_id=Auth::id();
        $data->services_id=$request->input('services_id');
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->rate=$request->input('rate');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('services',['id' =>$request->input('services_id')])->with('info','Your Comment Has Been Sent, Thank you.');

    }


    public function services($id)
    {
        $sliderdata=Services::limit(4)->get();
        $images = DB::table('images')->where('services_id',$id)->get();
        $reviews = Comment::where('services_id',$id)->where('status','True')->get();
        $serviceslist1=Services::limit(3)->get();
        $data=Services::find($id);
        return view('home.services' ,[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews,
            'sliderdata'=>$sliderdata,
            'serviceslist1'=>$serviceslist1,
        ]);
    }

    public function categoryservices($id)
    {
        $category=Category::find($id);
        $services = DB::table('services')->where('category_id',$id)->get();
        return view('home.categoryservices' ,[

            'category'=>$category,
            'services' => $services
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our reords',
        ])->onlyInput('email');
    }
}
