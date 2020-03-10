<?php

namespace App\Http\Controllers\Frontend;
use App\Productdetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use DB;
use App\Comment;
class ProductdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $rating = DB::table('comments')
//            ->avg('rating');
//        dd($rating);
        $comment=Comment::all();
        $blog=Blog::latest()->paginate(2);
        $data['productdetails'] =Productdetails::all();
        return view('frontend.productdetails', $data)
            ->with('blog',$blog)
            ->with('comment',$comment)
            ->with('rating',$rating);
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

        $comment=Comment::where('productdetails_id',$id)->where('status',1)->get();

        $rating =Comment::where('productdetails_id',$id)->where('status',1)
            ->avg('rating');
//        dd($rating);
        $blog=Blog::all();
        $data['productdetails'] = Productdetails::findOrFail($id);
        return view('frontend.productdetails', $data)->with('productdetails',$data)
        ->with('blog',$blog)
            ->with('comment',$comment)
            ->with('rating',$rating);
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
