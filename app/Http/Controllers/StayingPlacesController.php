<?php

namespace App\Http\Controllers;
use App\Stayingplace;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StayingPlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.stayingplace')->with('stayingplaces',Stayingplace::all());
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
            'staytype'=>'required'   
                   
        ]);      
        $imagePath='/images/restaurant-4.jpg';    
        Stayingplace::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'staytype'=>$data['staytype'],
            'image'=>$imagePath
        ]);
        return redirect()->back()->with('success','You successfuly added the staying place.');
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
    public function destroy(Stayingplace $stayingplace)
    {
       $stayingplace->delete();
       return redirect()->back();
    }
}
