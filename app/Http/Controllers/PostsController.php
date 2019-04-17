<?php

namespace App\Http\Controllers;

//use App\Posts;
use App\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    
     public function getIndex()
  {
  
  $posts = Post::with('Author')-> orderBy('id', 'DESC')->get();
         
//         $posts =DB::table('users')with('Author')-> orderBy('id', 'DESC')->get();
//   return view('greeting', ['name' => 'James']);
   
    return view('index', compact('posts'));
//  return View::make('index')->with('posts',$posts);
  
  }
  
   public function dashboard()
  {
       dd('ss');
  
  }
//  public function getAdmin()
//  {
//  return View::make('addpost');
//  }
//  public function postAdd()
//  {
//  Post::create(array(
//              'title' => Input::get('title'),
//              'content' => Input::get('content'),
//              'author_id' => Auth::user()->id
//   ));
//  return Redirect::route('index');
//  }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
//    public function show($id)
//    {
//        return view('user.profile', ['user' => User::findOrFail($id)]);
//    }
}