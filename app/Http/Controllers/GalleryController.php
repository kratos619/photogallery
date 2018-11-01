<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Redirect;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all gallery
        $gallerys = DB::table('galleries')->get();
        return view('gallery/index',compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()){
            return Redirect::route('gallery.index');
        }else{
            return Redirect::route('gallery.index');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert to db

        $name = $request->input('name');
        $description = $request->input('description');
        $cover_image = $request->file('name');
        $owner_id = 1;

        //check upload

        if($cover_image){
           $cover_image_file_name =  time().$cover_image->getClientOriginalName();
           $cover_image->move(public_path('images'),$cover_image_file_name);
           //echo "<pre>". var_dump($cover_image_file_name) ."</pre>";
         }else{
            $cover_image_file_name = 'noimage.jpg';
        }

        DB::table('galleries')->insert(
                [
                    'owner_id' => $owner_id,
                    'name' => $name,
                    'description' => $description,
                    'cover_image' => $cover_image_file_name   
                ]
                );

                \Session::flash('message','Gallery Is Added');
                return Redirect::route('gallery.index');
        
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
        $galleri = DB::table('galleries')->where('id',$id)->first();
        $photo = DB::table('photos')->where('gallery_id',$id)->get();
        return view('gallery/show',compact('galleri','photo'));
         

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
}
