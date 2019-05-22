<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Criteria extends Model{
	public $timestamps		= false;
    protected $connection	= 'mysql';
    protected $table		= 'criteria';
    protected $fillable		= ['CategoryName'];
	function subCategory(){ 
		return $this->hasMany('App\SubCategory'); 
	}
}
