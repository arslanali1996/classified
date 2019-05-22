<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Ad;

class UserController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	function loadDashboard(){
		return view('template\user\main',['data'=>[]]);
	}
	function loadAdForm(){
		return view('template\user\add_form',['data'=>[]]);	
	}
	function submitAd(){

		$modelName = new Ad;
		$modelName->adTitle = 'Cg 125 for sale';
		$modelName->save();
		//return view('template\user\add_form',['data'=>[]]);	
	}
}
