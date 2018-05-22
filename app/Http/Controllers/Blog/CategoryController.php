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
            echo "Update Successfully!";
            return redirect()->back();
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

    public function viewAction($id)
    {
        echo "Processing with category id : ". $id."<br>";
        /*$posts = DB::table('posts')->where('category_id' , '=' ,$id )->get();
        return view('blog.post.list', compact('posts'));*/
        $tmp = DB::table('posts')->where('category_id' , '=' ,$id )->get();
        $posts = json_decode($tmp, true);

        return view('blog.post.list', compact('posts'));

    }
    public function deleteAction($id)
    {
            $category = Category::find($id);
            $category->delete();
            return redirect()->back()->with('flash','Delete successfully');
    }
    #
    
}
