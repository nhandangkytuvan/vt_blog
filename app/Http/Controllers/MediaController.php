<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use DB,File,Auth,App,Session;
class MediaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::paginate(15);
        return view('medias.index',['medias'=>$medias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terms = App\Term::get();
        return view('medias.create',['terms'=>$terms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->file('avatar');
        if(count($files)){
            foreach ($files as $key => $file) {
                $file_name = time().'-'.$key.'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                //
                $media = new Media;
                $media->user_id = Auth::id();
                foreach ($media->fillable as $key => $value) {
                    if($value=='avatar'){continue;}
                    if($request->has($value)){
                        $media->$value = $request->input($value);
                    }
                }
                $media->avatar = $file_name;
                $media->save();
            }
        }
        return redirect('medias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        $terms = App\Term::get();
        return view('medias.edit',['media'=>$media,'terms'=>$terms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        foreach ($media->fillable as $key => $value) {
            if($request->has($value)){
                $media->$value = $request->input($value);
            }
            if($request->hasFile($value)){
                $file = $request->file($value);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $media->$value = $file_name;
            }
        }
        $media->save();
        return redirect('medias/'.$media->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $media->delete();
        File::delete(public_path('upload\\').$media->avatar);
        return redirect('medias');
    }
}
