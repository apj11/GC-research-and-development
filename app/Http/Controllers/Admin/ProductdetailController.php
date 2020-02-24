<?php

namespace App\Http\Controllers\Admin;
use App\Productdetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   $productdetails=Productdetails::all();
   return view('admin.productdetail.index')
       ->with('productdetail',$productdetails);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productdetail.create');
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
            'category'=>'required',
            'description'=>'required',
            'tags'=>'required',


        ]);
        $productdetails = new Productdetails() ;
        $productdetails->title =$request->get('title');
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image_new_name=time().$image->getClientOriginalName();
            $destination='uploads/topwide';
            $image->move($destination,$image_new_name);
            $productdetails->image = '/uploads/topwide/'.$image_new_name;
        }
        $productdetails->category =$request->get('category');
        $productdetails->description =$request->get('description');

        $productdetails->tags=$request->get('tags');
        $productdetails->google =$request->get('google');
        $productdetails->youtube =$request->get('youtube');
        $productdetails->facebook =$request->get('facebook');
        $productdetails->instagram =$request->get('instagram');
        $productdetails->twitter =$request->get('twitter');

        $productdetails->save();
        return back()->with('success','Data submitted successfully');
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
        $productdetails = Productdetails::find($id);
        return view('admin.productdetail.edit')->with('productdetail',$productdetails);
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
            'category'=>'required',
            'description'=>'required',
            'tags'=>'required',


        ]);

        $productdetails = Productdetails::find($id);
        if ($productdetails) {
            $productdetails->title = $request->get('title');
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_new_name = time() . $image->getClientOriginalName();
                $destination = 'uploads/topwide';
                $image->move($destination, $image_new_name);
                $productdetails->image = '/uploads/topwide/' . $image_new_name;
            }
            $productdetails->category = $request->get('category');
            $productdetails->description = $request->get('description');
            $productdetails->tags = $request->get('tags');
            $productdetails->google = $request->get('google');
            $productdetails->youtube = $request->get('youtube');
            $productdetails->facebook = $request->get('facebook');
            $productdetails->instagram = $request->get('instagram');
            $productdetails->twitter = $request->get('twitter');

        }
            $productdetails->save();
            return back()->with('success', 'Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productdetails = Productdetails::find($id);
        $productdetails->delete();
        return back()->with('success','Data has been deleted successfully');
    }
}
