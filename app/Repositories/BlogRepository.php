<?php

namespace App\Repositories;


use App\Blog;

class BlogRepository extends CommonRepository
{
    public function getAllBlog()
    {
        return Blog::all();
    }
}