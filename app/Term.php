<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'terms';
    public $fillable = ['id','user_id','term_id','name','avatar','alias','description','content','orther'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function post()
    {
        return $this->hasMany('App\Post');
    }
}
