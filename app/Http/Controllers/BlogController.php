<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Blog;
use App\User;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Redirect;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     function __construct(Blog $blogModel) {
         $this->blogModel = $blogModel;
     }

     public function index(Request $request) {
         $name = Blog::get();
         return view('blogs')->with('blogs', $name);

     }

     public function edit($blog_id) {
         $blog = Blog::find($blog_id);
         return view('update', ['blog' => $blog]);

     }

     public function update(Request $request) {
        $blog_obj = new Blog();
        $blog_obj->blog_id = Request::input('blog_id');
        $blog = Blog::find($blog_obj->blog_id); // Eloquent Model
        $blog->update(Input::only('blog_name', 'blog_url','blog_desc'));
        return redirect('/blog');
    }

    public function deleteBlog($blog_id) {
      	$blog = Blog::find($blog_id);
      	$blog->delete();
      	return Redirect('/blog');
      }


     public function addBlog() {
         return view('add_blog');
     }

     public function store(Request $request) {
         $blog = new Blog;
         $blog->fill(Request::all());
         $blog->save();
         return redirect('/add_blog');

     }
}
