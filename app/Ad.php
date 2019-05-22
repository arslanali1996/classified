<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Ad extends Model{
	
	public $timestamps		= false;
    protected $connection	= 'mysql';
    protected $table		= 'ad';

	protected $fillable		= ['adTitle'];
}
