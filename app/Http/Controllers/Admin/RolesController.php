<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;

use Illuminate\Support\Facades\Route;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        session()->flash('helpSweet', 'on this page, you can define role and permissions. for example writer is a role and delete is a permiison . if yo give this permission to this role, writer can delete anything that you specific. you can assign roles to each user on Users panel.if you hold mouse on top of any button, you can see more help.');

        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'guard_name' => 'required',
        ]);
        $inputs = $request->all();

        $role = Role::create($inputs);

        return redirect()->route('roles.index')
                        ->with('successSweet','Role created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = $role;
        $rolePermissions = $role->permissions;

        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Role $role, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'guard_name' => 'required',
        ]);
        $inputs =$request->all();
        $role->update($inputs);


        return redirect()->route('roles.index')->with('successSweet','Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')
                        ->with('success','Role deleted successfully');
    }

    public function showRelations(Role $role){
        $permissions =  Permission::all();
        return view('admin.roles.set-permission',compact('permissions','role'));


    }

    public function setRelations(Request $request,Role $role){
        $inputs = $request->all();
        $inputs['permissions'] = $inputs['permissions'] ?? [];
        $role->permissions()->sync($inputs['permissions']);
        return redirect()->route('roles.index')->with('successSweet','Role updated successfully');


    }

}
