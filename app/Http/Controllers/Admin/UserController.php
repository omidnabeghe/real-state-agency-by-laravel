<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

use App\Http\Services\Image\ImageService;
use App\Models\Role;
use Carbon\Carbon;
use App\Models\User;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        session()->flash('helpSweet', 'on this page, you can see all users on here. you can not delete any user but just edit some attributes. if user be inactive, he can not do anything for permission. if hold mouse on top of button, you can see more detail.');
        return view('admin.user.index',compact('users'));
    }


    public function edit(User $user ){
        return view('admin.user.edit',compact('user'));
    }

    public function update(UserRequest $request, ImageService $imageService, User $user){
        $inputs = $request->all();
        if ($request->hasFile('avatar')) {
            if (!empty($user->image)) {
                $imageService->deleteDirectoryAndFiles($user->image['directory']);
            }
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'user');
            $result = $imageService->createIndexAndSave($request->file('avatar'));
            if ($result === false) {
                return redirect()->route('admin.user')->with('errorSweet', 'image upload fails');
            }
            $inputs['avatar'] = $result;
            }
           $inputs['password'] = Hash::make($request->password);

        $user->update($inputs);
        return redirect()->route('admin.user')->with('successSweet', 'you succesfully updated');
    }

    public function destroy(Ads $advertise){
        $advertise->delete();
        return redirect()->route('admin.ads')->with('deleteSweet', 'you succesfully deleted');
    }


    public function isActive(User $user){

        $user->is_active = $user->is_active == 0 ? 1 : 0;
        $result = $user->save();
        if($result){
            return redirect()->route('admin.user')->with('successSweet', '  user status changed successfully');
        }
        else{
            return redirect()->route('admin.user')->with('errorSweet', '  we have error for user change');
        }

    }

    public  function userRoleShow(User $user){
        $roles = Role::all();

        return view('admin.user.user-role',compact('user','roles'));

    }

    public  function userRole(Request $request,User $user){
        $inputs= $request->all();
        $user->assignRole($inputs['role_id']);

        return redirect()->route('admin.user')->with('successSweet', '  user role changed successfully');

    }


}
