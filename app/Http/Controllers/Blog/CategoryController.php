<?php

namespace App\Http\Controllers\Blog;
use App\Category;
use App\Post;

use Illuminate\Support\Facades\DB;
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
        echo "string";
        $category = Category::all();
        return view('blog.category.list', compact('category'));
    }
    #Return view new.blade.php+
    public function newAction()
    {        
        return view('blog.category.form' );

    }
    //return view edit action with id to update
    public function editAction(Request $request, $id)
    {
            $category = Category::find($id);
            //var_dump($category);
           return view('blog.category.form', compact('category'));
    }

   
    public function saveAction(Request $request)
    {
        $id = $request->id;
        if(isset($id))
        {
            $category = Category::find($id);
            $category->name = $request->name;
            $category->save();
            return redirect()->back()->with('flash','Update Successfully!');
        }
        else
        {
            $category = new Category();
            $category->name = $request->name;
            $category->save();
            echo "Save successfully!";
            return redirect()->back();
        }
     
        
    }

    public function viewAction($slug)
    {
        $category = Category::where('slug', '=' , $slug)->first();

        $posts = $category->posts;
        return view('blog.category.view',compact('category','posts'));

    }
    public function deleteAction($id)
    {
            $category = Category::find($id);
            $category->delete();
            return redirect()->back()->with('flash','Delete successfully');
    }
    #
    
}
