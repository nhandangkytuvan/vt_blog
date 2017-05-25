<?php

namespace App\Http\Controllers;

use App\Config;
use Illuminate\Http\Request;
use DB,File,Auth,App,Session;
class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configs = Config::get();
        return view('configs.index',['configs'=>$configs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $config = new Config;
        foreach ($config->fillable as $key => $value) {
            if($request->has($value)){
                $config->$value = $request->input($value);
            }
            if($request->hasFile($value)){
                $file = $request->file($value);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $config->$value = $file_name;
            }
        }
        //json content
        $input = $request->except(array_merge(['_token','_method'],$config->fillable));
        $content = [];
        foreach ($input as $key => $value) {
            if($request->has($key)){
                $content[$key] = $request->input($key);
            }
            if($request->hasFile($key)){
                $file = $request->file($key);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $content[$key] = $file_name;
            }
        }
        $config->content = json_encode($content);
        $config->save();
        return redirect('configs/'.$config->id.'/edit'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        return view('configs.edit',['config'=>$config]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        foreach ($config->fillable as $key => $value) {
            if($request->has($value)){
                $config->$value = $request->input($value);
            }
            if($request->hasFile($value)){
                $file = $request->file($value);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $config->$value = $file_name;
            }
        }
        //json content
        $input = $request->except(array_merge(['_token','_method'],$config->fillable));
        $content = [];
        foreach ($input as $key => $value) {
            if($request->has($key)){
                $content[$key] = $request->input($key);
            }
            if($request->hasFile($key)){
                $file = $request->file($key);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $content[$key] = $file_name;
            }
        }
        $config->content = json_encode($content);
        $config->save();
        return redirect('configs/'.$config->id.'/edit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        $config->delete();
        DB::statement('ALTER TABLE configs AUTO_INCREMENT = 1');
        return redirect('configs');
    }
}
