<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';

  /*  
    public function getCategory()
    {
    	return $this -> belongsTo('App\Category');
    }*/
}
