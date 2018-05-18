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
        $category = Category::all();
        return view('blog.category.list', compact('category'));
    }
    #
    public function viewAction()
    {

    }
    #
    public function editAction(Request $request,$id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
    }
    #
    public function deleteAction($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('inform','Delete Successfully!');
    }
    #
    public function saveAction()
    {

    }

    public function newAction()
    {
        return view('blog.category.add');
    }
    
    
}
