<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Social;
class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $social=Social::all();
       return view('admin.social.index')
       ->with('social',$social);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social.create');
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
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'facebook'=>'required',

        ]);
        $social =new Social();
        $social->email=$request->get('email');
        $social->phone=$request->get('phone');
        $social->address=$request->get('address');
        $social->facebook=$request->get('facebook');
        $social->twitter=$request->get('twitter');
        $social->instagram=$request->get('instagram');
        $social->youtube=$request->get('youtube');
        $social->gmail = $request->get('gmail');
        $social->save();
        return back()->with('success','data has been added successfully');

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
        $social = Social::find($id);
        return view('admin.social.edit')->with('social',$social);
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
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'facebook'=>'required',

        ]);
        $social =Social::find($id);
        if($id) {
            $social->email = $request->get('email');
            $social->phone = $request->get('phone');
            $social->address = $request->get('address');
            $social->facebook = $request->get('facebook');
            $social->twitter = $request->get('twitter');
            $social->instagram = $request->get('instagram');
            $social->youtube = $request->get('youtube');
            $social->gmail = $request->get('gmail');
        }
        $social->save();
        return back()->with('success','data has been updatedS successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social=Social::find($id);
        $social->delete();
        return back()->with('success','data has been deleted successfully');
    }
}
