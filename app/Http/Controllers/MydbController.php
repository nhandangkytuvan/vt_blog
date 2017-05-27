<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,File,Auth,App,Session;
class MydbController extends Controller
{
    //insert terms
    public function terms(){
        $term_olds = DB::table('term')->get();
        foreach ($term_olds as $key => $term_old) {
            $term_new = new App\Term;
            $term_new->id = $term_old->id;
            $term_new->user_id = Auth::id();
            $term_new->name = $term_old->term_name;
            $term_new->alias = $term_old->term_alias;
            $term_new->term_id = $term_old->term_id;
            $term_new->avatar = $term_old->term_avatar;
            $term_new->description = $term_old->term_description;
            $term_new->content = json_encode(['keyword'=>$term_old->term_keyword,'meta'=>$term_old->term_meta]);
            $term_new->save();
            echo 'success '.$term_old->term_name.'<br>';
        }
    }
    //insert posts
    public function posts(){
        $post_olds = DB::table('post')->whereIn('term_id',[32,34])->get();
        foreach ($post_olds as $key => $post_old) {
            $post_new = new App\Post;
            $post_new->id = $post_old->id;
            $post_new->user_id = Auth::id();
            $post_new->name = $post_old->post_name;
            $post_new->alias = $post_old->post_alias;
            $post_new->term_id = $post_old->term_id;
            $post_new->avatar = $post_old->post_avatar;
            $post_new->description = $post_old->post_description;
            $post_new->content = json_encode(['keyword'=>$post_old->post_keyword,'detail'=>$post_old->post_detail]);
            $post_new->save();
            echo 'success '.$post_old->post_name.'<br>';
        }
    }
    //insert medias
    public function medias(){
        $media_olds = DB::table('media')->get();
        foreach ($media_olds as $key => $media_old) {
            $media_new = new App\Media;
            $media_new->id = $media_old->id;
            $media_new->user_id = Auth::id();
            $media_new->name = $media_old->media_name;
            $media_new->alias = $media_old->media_alias;
            $media_new->term_id = $media_old->term_id;
            $media_new->avatar = $media_old->media_file;
            $media_new->description = $media_old->media_name;
            $media_new->save();
            echo 'success '.$media_old->media_name.'<br>';
        }
    }
    //insert users
    public function users(){
        $user_olds = DB::table('user')->where('id','<>',1)->get();
        foreach ($user_olds as $key => $user_old) {
            $user_new = new App\User;
            $user_new->name = $user_old->username;
            $user_new->email = $user_old->username.'@gmail.com';
            $user_new->password = $user_old->password;
            $user_new->save();
            echo 'success '.$user_old->username.'<br>';
        }
    }
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
