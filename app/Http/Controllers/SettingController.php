<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $setting = Setting::first();
        //dd($setting);
        return view('admin.setting.create',compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo 'aaa';
        $setting = Setting::first();

        if(!$setting){
            $setting = new Setting;
        }

        $setting -> name = $request->name;
        $setting -> intro = $request->intro;
        $setting -> content = $request->content;
        $setting -> keywords = $request->keywords;
        $setting -> miaoshu = $request->miaoshu;
        $setting -> title = $request->title;
        $setting -> domain = $request->domain;
        $setting -> qrcode = $request->input('qrcode', 'https://picsum.photos/400/300?image=2');

        if($setting->save()){
            return back()->with('success','设置成功');
        }else{
            return back()->with('error','设置失败!!');
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
    }
}
