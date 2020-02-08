<?php

namespace App\Http\Controllers;
use App\Place;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PlacesController extends Controller
{   public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.places.index')->with('places',Place::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.places.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data = $this->validate($request,[
            'name'=>'required',
            'description'=>'required',            
            'image'=>'required|image|max:10024'           
        ]);

        $imagename=str_slug($request->name);
        $imagePath=request('image')->storeAs('places',$imagename.'-place.png','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(300,200);
        $image->save(); 
        Place::create([
            'name'=>$data['name'],
            'description'=>$data['description'],
            'image'=>$imagePath
        ]);
        return redirect()->route('places.index')->with('success','You successfully added the visiting place');
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
    public function destroy(Place $place)
    {    if($place->image){
        $image_path ='/storage/'.$place->image;       
        unlink(public_path() . $image_path);
         }          
        $place->delete();
        return redirect()->back()->with('success','You successfully deleted the visiting place');
    }
}
