<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'configs';
    public $fillable = ['id','name','avatar','description','content'];
}
