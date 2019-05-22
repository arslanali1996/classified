<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Users extends Model{
	public $timestamps = false;
	protected $connection = 'mysql';
	protected $table = 'users';
	public function contacts(){
		return $this->hasMany('App\Contact');
	}
}
