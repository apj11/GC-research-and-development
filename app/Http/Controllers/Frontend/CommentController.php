<?php

namespace App\Http\Controllers\Frontend;
//use App\Http\Controllers\Frontend\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'comment'=>'required',
            'username'=>'required',
            'email'=>'email',
            'rating'=>'required',
]);
//       dd($request->all());
//        if (Auth::check()) {
//            Comment::create([
//                'productdetails_id'=>$request->product_id,
//                'username' => Auth::user()->username,
//                'comment' => $request->input('comment'),
//                'user_id' => Auth::user()->id
//
//            ]);
        //     {
        $comment= new Comment();
         $comment->productdetails_id =$request->get('product_id');
         $comment->username =$request->get('username');
         $comment->email=$request->get('email');
         $comment->comment=$request->get('comment');
          $comment->rating=$request->get('rating');
          $comment->status=0;

        $comment->save();
        //     }

            return back()->with('success','submmited');
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
        if (Auth::check()) {

            $reply = Reply::where(['comment_id'=>$comment->id]);
            $comment = Comment::where(['user_id'=>Auth::user()->id, 'id'=>$comment->id]);
            if ($reply->count() > 0 && $comment->count() > 0) {
                $reply->delete();
                $comment->delete();
                return 1;
            }else if($comment->count() > 0){
                $comment->delete();
                return 2;
            }else{
                return 3;
            }

        }
    }
}
