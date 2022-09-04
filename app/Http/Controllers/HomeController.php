<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Ads;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Slide;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
/*         $this->middleware(['auth','verified']);
 */    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $slides = Slide::all();
        $lastAds = Ads::latest()->take(3)->get();
        $specialOffers = Ads::where('amount', '>=',1000)->take(3)->get();
        $lastPosts = Post::latest()->take(4)->get();

        return view('home',compact('slides','lastAds','specialOffers','lastPosts'));
    }

    public function ads(){
        $ads = Ads::orderBy('created_at', 'desc')->paginate(2);
        return view('home.ads',compact('ads'));
    }

    public function adsCategory(){
        $slice = Str::after(url()->current(), 'http://localhost:8000/ads/');
        $categoryAdsId = Category::where('name',$slice)->first()->id ?? '';
        $categoryAds = Ads::where('cat_id',$categoryAdsId)->get();


        $ads = Ads::where('cat_id','!=',null)->get() ?? '';
        if($ads != null){
         foreach($ads as $advertise){
             $categories[] = $advertise->category;

         }
        }

         foreach($categories as $category){
             $countAdsCat[$category->name] = $category->ads;

         }

         $relatedAds = Ads::where('cat_id',$advertise->cat_id)->where('id','!=',$advertise->id)->get();


         $lastPosts = Post::latest()->take(3)->get();

         return view('home.category-advertise',compact('relatedAds','categoryAds','countAdsCat','lastPosts'));
     }


    public function advertise(Ads $advertise){
    $allGalleries  = Gallery::where('advertise_id', $advertise->id)->get();

    $galleries = collect();
    $galleries->push($advertise->image);

    foreach($allGalleries as $allGallery){

            $galleries->push($allGallery->image);
         }
     
    

    $relatedAds = Ads::where('cat_id',$advertise->cat_id)->where('id','!=',$advertise->id)->get();
    $lastPosts = Post::latest()->take(3)->get();
    $ads = Ads::where('cat_id','!=',null)->get() ?? '';
    if($ads != null){
     foreach($ads as $advertise){
         $categories[] = $advertise->category;
     }
    }

    foreach($categories as $category){
        $countAdsCat[$category->name] = $category->ads->pluck('name')->count();

    }

    return view('home.advertise',compact('advertise','galleries','relatedAds','lastPosts','categories','countAdsCat'));
    }

    public function posts(){
        $posts = Post::orderBy('id','desc')->paginate(8);
        return view('home.posts',compact('posts'));
    }

    public function postsCategory(){
       $slice = Str::after(url()->current(), 'http://localhost:8000/posts/');
       $categoryPostsId = Category::where('name',$slice)->first()->id ?? '';
       $categoryPosts = Post::where('cat_id',$categoryPostsId)->get();


       $posts = Post::where('cat_id','!=',null)->get() ?? '';
       if($posts != null){
        foreach($posts as $post){
            $categories[] = $post->category;

        }

       }

        foreach($categories as $category){
            $countPostCat[$category->name] = $category->posts;

        }

        $lastPosts = Post::latest()->take(3)->get();

        return view('home.category-post',compact('categoryPosts','countPostCat','lastPosts'));
    }

    public function post(post $post){
        $comments = Comment::where('approved',1)->where('post_id',$post->id)->where('parent_id',null)->get();

        if($post->comments->pluck('id')->toArray()  != null){
            foreach($post->comments->pluck('id') as $childComment){
                $childComments[] = Comment::where('approved',1)->where('post_id',$post->id)->where('parent_id' , $childComment)->get() ;
            }
        }else{
            $childComments = null;
        }
        $posts = Post::where('cat_id','!=',null)->get() ?? '';
        if($posts != null){
         foreach($posts as $post){
             $categories[] = $post->category;

            }

        }

        foreach($categories as $category){
            $countPostCat[$category->name] = $category->posts;

        }

        $lastPosts = Post::latest()->take(3)->get();


        return view('home.post',compact('post','comments','childComments','countPostCat','lastPosts'));
    }

    public function comment(CommentRequest $request){
        $inputs = $request->all();
        $inputs['user_id'] = auth()->user()->id;
        $inputs['post_id'] = $request->post_id;
        $inputs['parent_id'] = $request->parent_id;
        $inputs['status'] = 0;
        $inputs['approved'] = 0;
        Comment::create($inputs);
        return back();
    }

    public function help(){
        return view('home.help');


    }

}
