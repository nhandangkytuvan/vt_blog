<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    public $fillable = ['id','user_id','term_id','name','avatar','alias','description'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function term()
    {
        return $this->belongsTo('App\Term');
    }
}
