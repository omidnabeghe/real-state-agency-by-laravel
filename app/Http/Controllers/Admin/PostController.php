<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderby('published_at','desc')->paginate(7);
        session()->flash('helpSweet', 'on this page, you can add any news or posts ..., all will be shown to the audiences in posts');
        return view('admin.post.index',compact('posts'));
    }

    public function create(){
        $categories = Category::all();

        return view('admin.post.create',compact('categories'));
    }

    public function store(PostRequest $request, ImageService $imageService){
        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'post');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('admin.post.index')->with('errorSweet', 'image upload fails');
            }
            $inputs['image'] = $result;
        }
        $inputs['user_id'] =  auth()->id();
        $post = Post::create($inputs);
        return redirect()->route('admin.post')->with('successSweet', 'new post created successfull');

    }

    public function edit(Category $category , Post $post){
        $categories = Category::all();


        return view('admin.post.edit',compact('categories','post'));
    }

    public function update(PostRequest $request, ImageService $imageService, Post $post){
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            if (!empty($post->image)) {
                $imageService->deleteDirectoryAndFiles($post->image['directory']);
            }
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'post');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('admin.post.index')->with('errorSweet', 'upload face error');
            }
            $inputs['image'] = $result;
        } else {
            if (isset($inputs['currentImage']) && !empty($post->image)) {
                $image = $post->image;
                $image['currentImage'] = $inputs['currentImage'];
                $inputs['image'] = $image;
            }
        }
        $post->update($inputs);
        return redirect()->route('admin.post')->with('successSweet', 'you succesfully updated');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('admin.post')->with('deleteSweet', 'you succesfully deleted');
    }

}
