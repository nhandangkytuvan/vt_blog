<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use DB,File,Auth,App,Session;
class PostController extends Controller
{
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
        $posts = Post::paginate(10);
        return view('posts.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create', Post::class);
        $terms = App\Term::get();
        return view('posts.create',['terms'=>$terms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = Auth::id();
        foreach ($post->fillable as $key => $value) {
            if($request->has($value)){
                $post->$value = $request->input($value);
            }
            if($request->hasFile($value)){
                $file = $request->file($value);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $post->$value = $file_name;
            }
        }
        //json content
        $input = $request->except(array_merge(['_token','_method'],$post->fillable));
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
        $post->content = json_encode($content);
        $post->save();
        return redirect('posts/'.$post->id.'/edit'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $terms = App\Term::get();
        return view('posts.edit',['post'=>$post,'terms'=>$terms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        foreach ($post->fillable as $key => $value) {
            if($request->has($value)){
                $post->$value = $request->input($value);
            }
            if($request->hasFile($value)){
                $file = $request->file($value);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $post->$value = $file_name;
            }
        }
        //json content
        $input = $request->except(array_merge(['_token','_method'],$post->fillable));
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
        $post->content = json_encode($content);
        $post->save();
        return redirect('posts/'.$post->id.'/edit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        File::delete(public_path('upload\\'.$post->avatar));
        DB::statement('ALTER TABLE posts AUTO_INCREMENT = 1');
        return redirect('posts');

    }
}
