<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Users;

class testController extends BaseController{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public function factory(){
		return 'factory';
	}

	public function testDb(){
		//DB::transaction(function(){
			//DB::table('users')->delete();
		//});
		//DB::rollBack();
		//$users = DB::connection('mysql')->select('select * from users');
		//$users	= DB::connection('mysql')->table('users')->get();
		//$test	= Test::all();
		//print_r($test->toJson());
	}
	public function addDb(){
		$users = new Users;
		$users->name = 'Zaman';
		$users->save();
		//DB::transaction(function(){
			//DB::table('users')->delete();
		//});
		//DB::rollBack();
		//$users = DB::connection('mysql')->select('select * from users');
		//$users	= DB::connection('mysql')->table('users')->get();
		//$test	= Test::all();
		//print_r($test->toJson());
	}

	public function getDb(){
		$users = Users::find(8);
		foreach($users as $user){
			print_r($user);
			//echo $user->name.'<br>';
		}
		//print_r($users);
		//DB::transaction(function(){
			//DB::table('users')->delete();
		//});
		//DB::rollBack();
		//$users = DB::connection('mysql')->select('select * from users');
		//$users	= DB::connection('mysql')->table('users')->get();
		//$test	= Test::all();
		//print_r($test->toJson());
	}
}