<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
	use Sluggable;
	
    protected $fillable = ['user_id','title','slug','content'];
	
	/*
	*
	*
	* Save new post!
	* @param array $post
	* @return object
	*/
	
	
	protected static $userModel = 'App\Models\User';
	
	public function user(){
		return $this->belongsTo(static::$userModel);
	}
	
	
	
	public static function savePost($postData = array()){
		$this->fill($postData)->save();
	}
	
	public static function updatePost($postData = array()){
		$this->update($postData);
	}
	
	 public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
