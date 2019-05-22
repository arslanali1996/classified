<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class SubCategory extends Model
{
	public $timestamps	= false;
    protected $connection= 'mysql';
    protected $table	= 'sub_category';
    protected $fillable	= ['SubCategoryName'];

    function category(){
		return $this->belongsTo('App\category');
	}
}
