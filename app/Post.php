<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
    // if you have a different table name from the model you corect it here
    // using this
    // protected $table = $nameOfTable;
    // for a different primary key from "id" we use 
    // protected $primaryKey = $KeyName

    protected $dates = ['deleted_at'];


    protected $fillable= [
        'title',
        'content',
        'author',
        'is_admin',

    ];

    public function user (){
            return $this->belongsTo('App\User');
    }

    public function photos(){
        return $this->morphMany('App\Photo', 'imageable');

    }

    public function tags(){

        return $this->morphToMany('App\Tag', 'taggable');
    }

}