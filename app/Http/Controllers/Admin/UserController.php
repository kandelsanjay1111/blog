<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Role;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Admin::all();
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $role=Role::all();
        return view('admin.user.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:admins',
            'password'=>'required|min:6|confirmed',
            'role'=>'required',
            'phone'=>'required|numeric|min:10',
        ]);

        $request['password']=bcrypt($request->password);
        $user=Admin::create($request->all());
        $user->roles()->sync($request->role);
        return redirect(route('user.index'))->with('success','Admin is created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Admin::find($id);
        $role=Role::all();
        return view('admin.user.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255',
            'role'=>'required',
            'phone'=>'required|numeric|min:10',
            'status'=>'',
        ]);
        if(!$request->status){
            $request['status']=0;
        }
        else{
            $request['status']=1;
        }
        $user=Admin::find($id)->update($request->except('_token','_method','role'));
        $admin=Admin::find($id)->roles()->sync($request->role);
        return redirect(route('user.index'))->with('success','Admin has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $admin=Admin::find($id);
        $admin->delete();
        return back()->with('success','Admin is deleted successfully');
    }
}
