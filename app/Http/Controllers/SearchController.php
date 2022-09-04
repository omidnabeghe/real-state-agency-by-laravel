<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchCategory(Request $request)
    {
        // queries to Algolia search index and returns matched records as Eloquent Models
    	if($request->has('search')){
    		$categories = Category::whereLike(['name'], $request->get('search'))->paginate(100);

    	}else{
            $categories = Category::orderby('created_at','desc')->paginate(9);

    	}
        return view('admin.category.index', compact('categories'));
    }

    public function searchPost(Request $request)
    {

        // queries to Algolia search index and returns matched records as Eloquent Models
    	if($request->has('search')){
    		$posts = Post::whereLike(['body'], $request->get('search'))->paginate(100);

    	}else{
            $posts = Post::orderby('published_at','desc')->paginate(9);

    	}
        return view('admin.post.index', compact('posts'));
    }
    public function searchAds(Request $request)
    {

        // queries to Algolia search index and returns matched records as Eloquent Models
    	if($request->has('search')){
    		$ads = Ads::whereLike(['title','description','address','year','floor','tag'], $request->get('search'))->paginate(100);

    	}else{
            $ads = Ads::orderby('created_at','desc')->paginate(9);

    	}
        return view('admin.ads.index',compact('ads'));
    }

}
