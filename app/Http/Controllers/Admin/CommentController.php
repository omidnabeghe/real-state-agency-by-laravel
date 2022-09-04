<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\PostRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        session()->flash('helpSweet', 'on this page, you can see all comments, if you do not confirm any comment on here, nobody can not see that comment.you can see more information when you hold your mouse on top of it.');

        return view('admin.comment.index',compact('comments'));
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

    public function show(Comment $comment){
        return view('admin.comment.show',compact('comment'));
    }


    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('admin.post')->with('deleteSweet', 'you succesfully deleted');
    }

    public function status(Comment $comment){

        $comment->status = $comment->status == 0 ? 1 : 0;
        $result = $comment->save();
        if($result){
                if($comment->status == 0){
                    return response()->json(['status' => true, 'checked' => false]);
                }
                else{
                    return response()->json(['status' => true, 'checked' => true]);
                }
        }
        else{
            return response()->json(['status' => false]);
        }

    }

    public function approved(Comment $comment){

        $comment->approved = $comment->approved == 0 ? 1 : 0;
        $result = $comment->save();
        if($result){
            return redirect()->route('admin.comment')->with('successSweet', '  comment status changed successfully');
        }
        else{
            return redirect()->route('admin.comment')->with('errorSweet', '  we have error for comment change');
        }

    }


}
