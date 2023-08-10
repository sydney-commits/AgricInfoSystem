<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
  
    public function index()
    {
        $forum_posts = Forum::orderBy('id','desc')->get();

       // $y = $forum_posts->comments
        return view('forum.home',['forum_posts' => $forum_posts]);
    }

    public function store(Request $request)
    {
        $forum = new Forum();

        $forum->post = $request->input('post');
        $forum->category = 'N/A';
        $forum->username = $request->input('username');
  
        $forum->save();

        return back()->with('success','Question Submitted Successfully');

    }

    public function store_comment(Request $request){
        $comment = new Comment();

        $comment->forum_id =  $request->input('cid');
        $comment->username = $request->input('username');
        $comment->comment = $request->input('comment');

        $comment->save();

        return redirect()->back();


    }

 
    public function show(Forum $forum)
    {
        //
    }

 
    public function edit(Forum $forum)
    {
        //
    }

 
    public function update(Request $request, Forum $forum)
    {
        //
    }


    public function destroy(Forum $forum)
    {
        //
    }
}
