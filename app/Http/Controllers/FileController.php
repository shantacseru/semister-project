<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
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
        // return $request->image;
         // return $request->all();
     if ($request->hasFile('image')) {

         $filename = $request->image->getClientOriginalName();

          $filesize = $request->image->getClientSize();
       
        $request->image->storeAs('public/upload',$filename);

       $file = new File;



        $file->menuname=$request->menuname;
      
         $file->category=$request->category;
          $file->price=$request->price;
            $file->time=$request->time;
         

       $file->filename =  "/storage/upload/".$filename;

       // return Storage::url($filename);
       
        $file->filesize =  $filesize;
 
         $file->save();


        //return 'yes';
      }




      // return $request->all();






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = new File;

        $item = $file::find($id);

        return view('showProductImage',compact('item'));
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
