<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Slide;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index(){
        $slides = Slide::all();
        session()->flash('helpSweet', 'on this page, you can add any slideshow which appear in the main site to beautify view');
        return view('admin.slide.index',compact('slides'));
    }

    public function create(){
        return view('admin.slide.create');
    }

    public function store(SlideRequest $request, ImageService $imageService){
        $inputs = $request->all();

        if ($request->hasFile('image')) {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'slide');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('admin.slide.index')->with('errorSweet', 'image upload fails');
            }
            $inputs['image'] = $result;
        }
        $slide = Slide::create($inputs);
        return redirect()->route('admin.slide')->with('successSweet', 'new slide created successfull');

    }

    public function edit(Slide $slide){
        return view('admin.slide.edit',compact('slide'));
    }

    public function update(SlideRequest $request, ImageService $imageService, Slide $slide){
        $inputs = $request->all();
        if ($request->hasFile('image')) {
            if (!empty($slide->image)) {
                $imageService->deleteDirectoryAndFiles($slide->image['directory']);
            }
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'slide');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('admin.slide.index')->with('errorSweet', 'upload face error');
            }
            $inputs['image'] = $result;
        } else {
            if (isset($inputs['currentImage']) && !empty($slide->image)) {
                $image = $slide->image;
                $image['currentImage'] = $inputs['currentImage'];
                $inputs['image'] = $image;
            }
        }
        $slide->update($inputs);
        return redirect()->route('admin.slide')->with('successSweet', 'you succesfully updated');
    }

    public function destroy(Slide $slide){
        $slide->delete();
        return redirect()->route('admin.slide')->with('deleteSweet', 'you succesfully deleted');
    }



}
