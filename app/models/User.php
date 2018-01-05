<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;


class User extends EloquentUser
{
    /**
	*
	* The post model name
	*
	*@var string
	*/
	protected statis $postModel= 'App/Models/Post';
	
	
	
	public function posts(){
		return $this->hasMany(static::$postModel);
	}
}
