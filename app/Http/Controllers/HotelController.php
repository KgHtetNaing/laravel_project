<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels= Hotel::all();
        return view('backend.hotel.list',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.hotel.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'=> ['required','string','max:255','unique:hotels'],
            'price'=> 'required',
            'photo' => 'required|mimes:jpeg,bmp,png,jpg'
        ]);

        //
        if($validator){
            $name=$request->name;
            $price=$request->price;
            $photo= $request->photo;

            //fileupload
            $imageName= time().'.'.$photo->extension();
            $photo->move(public_path('images/hotel'),$imageName);
            $filepath = 'images/hotel/'.$imageName;

            //data insert
            $hotel=new Hotel;
            $hotel->name =$name;
            $hotel->price =$price;
            $hotel->photo = $filepath;
            $hotel->save();

            return redirect()->route('backside.hotel.index')->with("successMsg",'New Category has been added');
        }
        else{
            return redirect::back()->withErrors($validator);
        }
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel=Hotel::find($id);
        return view('backend.hotel.edit',compact('hotel'));
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
        $validator = $request->validate([
            'name'=> ['required','string','max:255'],
            'price'=> 'required',
            'photo' => 'mimes:jpeg,bmp,png,jpg',
            'oldPhoto'=> 'required'
        ]);

        //
        if($validator){
            $name=$request->name;
            $price=$request->price;
            $photo= $request->photo;
            $oldPhoto=$request->oldPhoto;

            //fileupload
            if($request->hasFile('photo')){
            $imageName= time().'.'.$photo->extension();
            $photo->move(public_path('images/hotel'),$imageName);
            $filepath = 'images/hotel/'.$imageName;

            if(\File::exists(public_path($oldPhoto))){
                \File::delete(public_path($oldPhoto));
            }
           }else{
            $filepath = $oldPhoto;
           }
            //Data Update
           $hotel= Hotel::find($id);
            $hotel->name =$name;
            $hotel->price =$price;
            $hotel->photo = $filepath;
            $hotel->save();

           return redirect()->route('backside.hotel.index')->with('successMsg','An Existing Hotel has been Updated');    
        }else{
            return redirect::back()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return redirect()->route('backside.hotel.index')->with('successMsg','A Hotel has been deleted');
    }
}
