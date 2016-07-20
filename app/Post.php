<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	//use \App\Scope\Published;
    //protected $fillable = ['title', 'content', 'published'];

    public function getDates()
	{
		return ['created_at', 'updated_at', 'viewed_at'];
	}
}
