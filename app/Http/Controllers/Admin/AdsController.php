<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdsRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Ads;
use App\Models\Category;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index(){
        $ads = Ads::orderby('created_at','desc')->paginate(3);
        session()->flash('helpSweet', 'on this page, you can add any new house and its specification, all will be shown to the audiences in Ads.');

        return view('admin.ads.index',compact('ads'));
    }

    public function create(){
        $categories = Category::all();

        return view('admin.ads.create',compact('categories'));
    }

    public function store(AdsRequest $request, ImageService $imageService){
        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'ads');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('admin.ads.index')->with('errorSweet', 'image upload fails');
            }
            $inputs['image'] = $result;
        }
        $inputs['user_id'] = auth()->id();
        $post = Ads::create($inputs);
        return redirect()->route('admin.ads')->with('successSweet', 'new ads created successfull');

    }

    public function edit(Category $category , Ads $advertise){
        $categories = Category::all();


        return view('admin.ads.edit',compact('categories','advertise'));
    }

    public function update(AdsRequest $request, ImageService $imageService, ads $advertise){
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            if (!empty($advertise->image)) {
                $imageService->deleteDirectoryAndFiles($advertise->image['directory']);
            }
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'ads');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('admin.post.index')->with('errorSweet', 'upload face error');
            }
            $inputs['image'] = $result;
        } else {
            if (isset($inputs['currentImage']) && !empty($advertise->image)) {
                $image = $advertise->image;
                $image['currentImage'] = $inputs['currentImage'];
                $inputs['image'] = $image;
            }
        }
        $advertise->update($inputs);
        return redirect()->route('admin.ads')->with('successSweet', 'you succesfully updated');
    }

    public function destroy(Ads $advertise){
        $advertise->delete();
        return redirect()->route('admin.ads')->with('deleteSweet', 'you succesfully deleted');
    }



}
