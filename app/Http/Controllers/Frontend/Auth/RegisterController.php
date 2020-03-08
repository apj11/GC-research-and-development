<?php

namespace App\Http\Controllers\Frontend\Auth;
use App\Award;
use App\Blog;
use App\Gallery;
use App\Partner;
use App\Productdetails;
use App\User;
use App\Http\Controllers\Controller;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $award=Award::latest()->paginate(3);
        $productdetails=Productdetails::latest()->paginate(3);
        $blog=Blog::latest()->paginate(2);
        $testimonial=Testimonial::all();
        $gallery=Gallery::all();
        $partner=Partner::all();
        return view ('frontend.index')
            ->with('testimonial',$testimonial)
            ->with('blog',$blog)
            ->with('award',$award)
            ->with('gallery',$gallery)
            ->with('productdetails',$productdetails)
            ->with('partner',$partner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());

        $this->validate($request,[
            'username'=>'required',
            'email'=>'required | email | unique:registers',
            'number'=>'required|min:8|max:10',
            'password'=>'required| confirmed |min:6',
            'password_confirmation'=>'required|min:6 |same:password',
            ]);
        $user =new User();
        $user->username=$request->username;
        $user->email=$request->email;
        $user->number=$request->number;
        $password = Hash::make($request->password);
        $user->password=$password;
//        $user->password=Hash::$request->password;
        $user->save();
        return back()->with('success','successfully Registered');

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
    public function destroy($id)
    {
        //
    }
}
