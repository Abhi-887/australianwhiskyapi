<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    function index():View{
        return view('frontend.blogs.blog-single');




       }
}
