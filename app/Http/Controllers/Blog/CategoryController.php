<?php

namespace App\Http\Controllers\Blog;
use App\Category;
use App\Post;

use App\Http\Controllers\Controller as FrontendController;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    #Show category
    public function listAction()
    {
        return view('blog.category.list');
    }
    #
    public function viewAction()
    {

    }
    #
    public function editAction()
    {

    }
    #
    public function deleteAction()
    {

    }
    #
    public function saveAction()
    {

    }
    
    
}
