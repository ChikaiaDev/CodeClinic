<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developer;
use App\Category;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $developers = Developer::all();
        $count = Developer::count();
        $categories = Category::all();
        return view ('admin.developers.index', compact('developers','count','categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.developers.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'dob'=> 'required',
            'email' => 'required',
            'bio' => 'required',
            'profile_pic'=>'image|nullable|max:1999'
          ]);

          //file upload handler
          if($request->hasFile('profile_pic')){
              //get filename with the extension
              $filenameWithExt = $request->file('profile_pic')->getClientOriginalName();
              //get just filename
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
              //get just ext
              $extension = $request->file('profile_pic')->getClientOriginalExtension();
              //filename to store
              $fileNameToStore=$filename.'_'.time().'.'.$extension;
              //image upload
              $path = $request->file('profile_pic')->storeAs('public/profile_pictures', $fileNameToStore);

          }else{
              $fileNameToStore = 'noimage.jpg';
          }

          $developer = new  Developer([
            'name'=>$request->name,
            'dob'=>$request->dob,
            'email'=>$request->email,
            'bio'=>$request->bio,
            'profile_pic'=>$fileNameToStore
          ]);
          $developer->category_id = $request->category_id;
          $developer->save();


          return redirect('/developer')->with('success', 'new developer added!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $developer = Developer::find($id);

        return view('admin.developers.show')->with('developer', $developer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $developer = Developer::find($id);
        return view('admin.developers.edit',compact('categories','developer'));
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
        $request->validate([
            'name'=>'required',
            'dob'=> 'required',
            'email' => 'required',
            'category_id' => 'required',
            'bio' => 'required'
          ]);
          $developer = Developer::find($id);
          $developer->name = $request->get('name');
          $developer->dob = $request->get('dob');
          $developer->email = $request->get('email');
          $developer->category_id = $request->get('category_id');
          $developer->bio = $request->get('bio');
          $developer->save();


          return redirect('/developer')->with('success', 'Developer details has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $developer = Developer::find($id);
        $developer->delete();

        return redirect('/developer')->with('success', 'Developer has been deleted Successfully');
    }
}
