<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //show all posts
    public function index(){
        return view('posts.index',['posts'=>Post::latest()->get()]);
    }

    public function get_posts_view(){

        return view('posts.get_posts_view',['posts'=>Post::latest()]);
    }


    public function get_posts()// read
    {
        $query=Post::query();
        $posts = $query->get();
        if($posts){
            return response()->json(['success' => true, 'posts' =>$posts]);
        }
        return response()->json(['success' => false, 'message' => 'Error on fetch']);

    }
    //store data method
    public function add_post(Request $request){
       $formFields=$request->validate([
        'class'=>'required',
        'teacher'=>['required'],
        'no_of_students'=>'required',
       ]);

       $formFields['user_id']=auth()->id();

       $post=Post::create($formFields);
       if($post){
        return response()->json(['success' => true, 'post' =>$post]);
        }
        return response()->json(['success' => false, 'message' => 'Error on upload']);
     }

    //Update Post
    public function update_post(Request $request,Post $post){
        //Make sure editor is the logged in user
        if($post->user_id != auth()->id()){
            abort(403,'Unauthorized Action!');
        }
        $formFields=$request->validate([
            'class'=>'required',
            'teacher'=>'required',
            'no_of_students'=>'required',
        ]);

        $updated_post=$post->update($formFields);
        if($updated_post){
            return response()->json(['success' => true, 'posts' =>$updated_post]);
        }
        return response()->json(['success' => false, 'message' => 'Error on delete']);
    }

    //Delete post
    public function delete_post(Post $post){
        if($post->user_id != auth()->id()){
            abort(403,'Unauthorized Action!');
        }
        $delete=$post->delete();
        if($delete){
            return response()->json(['success' => true, 'posts' =>$delete]);
        }
        return response()->json(['success' => false, 'message' => 'Error on delete']);    }
}
