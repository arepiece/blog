<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Database\Eloquent\Model;

class Post extends Model {

protected $table = 'posts';

//protected $fillable = array('title','content','author_id');
protected $fillable = ['title', 'content'];

public $timestamps = true;

public function Author(){

      return $this->belongsTo('User','author_id');
}

}