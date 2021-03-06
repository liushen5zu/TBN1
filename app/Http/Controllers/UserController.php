<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::orderBy('id','desc')->where('username','like','%'.request()->keywords.'%')->paginate(10);
        //dd($user);
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user = new User;
        $user -> username = $request->username;
        $user -> email = $request->email;
        $user -> password = $request->password;
        //$user -> image = $request->image;
        $user -> phone = $request->phone;
        $user -> permissions = $request->permissions;
        
        if($request->hasFile('image')) {
            $user->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }
        
       
        if($user -> save()){
            return redirect('/user')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }

        

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
        //
        $user = User::find($id);
        echo view('admin.user.edit',compact('user'));
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
        //
        $user = User::findOrFail($id);

        $user -> username = $request->username;
        $user -> email = $request->email;
        $user -> phone = $request->phone;
        $user -> permissions = $request->permissions;

        if($request->hasFile('image')) {
            $user->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }
        
       
        if($user -> save()){
            return redirect('/user')->with('success','编辑成功');
        }else{
            return back()->with('error','编辑失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        
        if($user -> delete()){
            return redirect('/user')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
