<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        session()->flash('helpSweet', 'on this page, you can add any category for your  posts(news) and ads ');
        return view('admin.category.index',compact('categories'));
    }

    public function create(){
        $categories = Category::where('parent_id',null)->get();

        return view('admin.category.create',compact('categories'));
    }

    public function store(CategoryRequest $request){
        $inputs = $request->all();
        Category::create($inputs);
        return redirect()->route('admin.category')->with('successSweet', 'you succesfully added');

    }

    public function edit(Category $category){
        $categories = Category::where('parent_id',null)->get();
        return view('admin.category.edit',compact('category','categories'));
    }

    public function update(CategoryRequest $request, Category $category){
        $inputs = $request->all();
        $category->update($inputs);
        return redirect()->route('admin.category')->with('successSweet', 'you succesfully updated');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('admin.category')->with('deleteSweet', 'you succesfully deleted');
    }

}
