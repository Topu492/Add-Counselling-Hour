<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public  function  view()
    {
        $data = [ ];
        $data ['categories'] =  Category::all();
        return view('backend.category.category_view', $data);
    }

    public  function  delete($id)
    {
        $data = [ ];
        $data['categories'] = Category::find($id);
        $data['categories']->delete();
        session()->flash('success','Category Deleted Successfully!');
        return redirect(route('showCategory'));
    }

    public function index()
    {
        $data = [ ];
        return view('backend.category.category_add',  $data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name' => 'required|unique:categories|max:255',
        ]);

        $categories = new Category();
        $categories->category_name = $request->category_name;
        $categories->save();

        session()->flash('success','Category Created Successfully!');

        return redirect(route('showCategory'));

    }
}
