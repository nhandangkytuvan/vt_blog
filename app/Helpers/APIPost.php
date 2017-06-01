<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
use DB,File,Auth,App,Session;
class APIPost {
    // get link post by id
    public static function getUrlByID($id = 0)
    {
        $post = App\Post::find($id);
        if($post){
            return url($post->alias.'-'.$post->id.'.html');
        }else{
            return url('/');
        }
    }
    // get link post by object
    public static function getUrlByObj($post = null)
    {
        if($post){
            return url($post->alias.'-'.$post->id.'.html');
        }else{
            return url('/');
        }
    }
    // ge description
    public static function getDescription($text, $limit) {
        $words = explode(" ",$text);
        return implode(" ",array_splice($words,0,$limit));
    }
}