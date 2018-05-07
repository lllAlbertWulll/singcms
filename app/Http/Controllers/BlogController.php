<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Repositories\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends CommonController
{
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $blogRepository = $this->blogRepository;
    }

    public function index()
    {
        return view('behind.content.index');
    }

    public function add()
    {
        $a = 1;
        $x = &$a;
        $a = 5;
        dd($x);
        //return view('behind.content.add');
    }

    public function getAllBlog(Request $request, Blog $blog)
    {
        $data = Blog::paginate(5);
        return response($data);
    }
}
