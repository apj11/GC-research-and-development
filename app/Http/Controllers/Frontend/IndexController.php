<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Partner;
use App\Testimonial;
use App\Blog;
use App\Productdetails;
use App\Gallery;
use App\Award;
use Illuminate\Http\Request;

class IndexController extends Controller
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
        //
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
