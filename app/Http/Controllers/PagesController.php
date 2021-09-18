<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function latest()
    {
        // This will pass a collection of the 4 most recent news records to the view... 
        return View('index')
        ->with('posts',Post::orderBy('created_at','DESC')->take(4)->get());
    }
}
