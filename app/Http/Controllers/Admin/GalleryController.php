<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Ads;
use App\Models\Gallery;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Ads $advertise){
        $galleries = Gallery::where('advertise_id', $advertise->id)->get();

        return view('admin.ads.gallery',compact('advertise','galleries'));
    }


    public function store(GalleryRequest $request, ImageService $imageService,Ads $advertise ){
        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'gallery');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('admin.ads.gallery')->with('errorSweet', 'image upload fails');
            }
            $inputs['image'] = $result;
        }
        $inputs['advertise_id'] = $advertise->id;
        $post = Gallery::create($inputs);
        return redirect()->route('admin.ads.gallery',$advertise->id)->with('successSweet', 'new ads created successfull');

    }


    public function destroy(Gallery $gallery, Ads $advertise){
        $gallery->delete();
        return redirect()->route('admin.ads.gallery',$advertise->id)->with('deleteSweet', 'you succesfully deleted');
    }


}
