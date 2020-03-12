<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Award;
class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $award=Award::all();
        return  view('admin.award.index')
            ->with('award',$award);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.award.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'description'=>'required',
            'title'=>'required',

            'image'=>'required',

        ]);
        $award=new Award();
        $award->title=$request->get('title');
        $award->description =$request->get('description');
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $award->image = '/uploads/topwide/'.$image_new_name;
        }

        $award->save();
        return back()->with('success','Data has been added successfully');
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
        $award =Award::find($id);
        return view('admin.award.index')->with('award',$award);
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

        $this->validate($request,[
            'title'=>'required',
            'image'=>'required',
            'description'=>'required',


        ]);


        $award = Award::find($id);
        if ($id)
        {

            $award->title=$request->get('title');
            if($request->hasFile('image')){
                $image=$request->file('image');
                $image_new_name=time().$image->getClientOriginalName();
                $destination='uploads/topwide';
                $image->move($destination,$image_new_name);
                $award->image = '/uploads/topwide/'.$image_new_name;
            }
            $award->description =$request->get('description');

        }

        $award->save();
        return back()->with('success','Data has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $award= Award::find($id);
        $award->delete();
        return back()->with('success','Data has been deleted successfully');
    }
}
