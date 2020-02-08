<?php

namespace App\Http\Controllers;
use App\Survey;
use Auth;
use App\User;
use App\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index')->with('places',\App\Place::orderBy('created_at','desc')->paginate(3))
        ->with('packages',\App\Package::orderBy('created_at','desc')->paginate(3))
        ->with('events',\App\Event::orderBy('created_at','desc')->paginate(3));
    }
    public function packages(){
        $id = Auth::id();
        $user = User::findOrFail($id);
        return view('user.survey')->with('surveys',$user->surveys);
    }
    public function store($id){
      // dd($id);
       $package = Package::findOrfail($id);
       Survey::create([
        'user_id'=>Auth::id(),
        'package_id'=> $package ->id
       ]);
        return redirect()->route('mypackages')->with('success','You sucessfully purchased the Package');
    }
}
