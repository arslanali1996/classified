<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Category extends Model{
	public $timestamps		= false;
    protected $connection	= 'mysql';
    protected $table		= 'category';
    protected $fillable		= ['CategoryName'];
	function subCategory(){ 
		return $this->hasMany('App\SubCategory'); 
	}
}
