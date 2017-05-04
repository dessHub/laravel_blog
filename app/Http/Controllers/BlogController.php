<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Blog;
use Request;
use Illuminate\Http\Input;
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

         return view('index');

     }

     public function addBlog() {
         return view('add_blog');
     }

     public function store(Request $request) {
         $blog = new Blog;
         $blog->fill(Request::all());
         $blog->save();
         return redirect('/blog');

     }
}
