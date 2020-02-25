<?php

namespace App\Http\Controllers\Admin;
use App\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner=Partner::all();
        return view('admin.partner.index')
            ->with('partner',$partner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
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
            'title'=>'required',

            'image'=>'required',


        ]);
        $partner =new Partner();
        $partner->title=$request->get('title');
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $partner->image = '/uploads/topwide/'.$image_new_name;
        }

        $partner->save();
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


        ]);
        $partner =Partner::find($id);
        if($id)
        {
            $partner->title=$request->get('title');
            if($request->hasFile('image')){
                $image=$request->file('image');
                $image_new_name=time().$image->getClientOriginalName();
                $destination='uploads/topwide';
                $image->move($destination,$image_new_name);
                $partner->image = '/uploads/topwide/'.$image_new_name;
            }

        }
        $partner->save();
        return back()->with('success','data has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner=Partner::find($id);
        $partner->delete();
        return back()->with('success','data has been deleted successfully');
    }
}
