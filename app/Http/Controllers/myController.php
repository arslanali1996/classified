<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class myController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function main(){
    	$data =  json_decode('[{"title":"Electronics","icon":"lnr-laptop-phone","list":[{"name":"Cameras & Accessories","Urls":""},{"name":"Computers & Accessories","Urls":""},{"name":"Kitchen & Appliances","Urls":""},{"name":"Mobiles & Accessories","Urls":""}]},{"title":"Services","icon":"lnr-users","list":[{"name":"Drivers & Taxi","Urls":""},{"name":"Tutors","Urls":""},{"name":"Event Services","Urls":""},{"name":"Consultants","Urls":""},{"name":"Maids & Domestic Help","Urls":""},{"name":"Travel & Visa","Urls":""},{"name":"Car Rental","Urls":""}]},{"title":"Vehicles","icon":"lnr-car","list":	[{"name":"Cars","Urls":""},{"name":"Bikes & Accessories","Urls":""},{"name":"Buses,Vans & Truck","Urls":""},{"name":"Accessories","Urls":""},{"name":"Boats","Urls":""},{"name":"Tractors & Trailers","Urls":""}]},{"title":"Real Estate","icon":"lnr-apartment","list":[{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""}]},{"title":"Jobs","icon":"lnr-briefcase","list":[{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""}]},{"title":"Furniture & Home Decor","icon":"lnr-diamond","list":[{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""}]},{"title":"Animals","icon":"lnr-paw","list":[{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""}]},{"title":"Fashion & Beauty","icon":"lnr-diamond","list":[{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""},{"name":"","Urls":""}]}]');
    	/*$data = [
				{	
					"title":"Electronics",
					"icon":"lnr-laptop-phone",
					"list":	[
								{"name":"Cameras & Accessories","Urls":""},
								{"name":"Computers & Accessories","Urls":""},
								{"name":"Kitchen & Appliances","Urls":""},
								{"name":"Mobiles & Accessories","Urls":""}
							]
				},
				{	
					"title":"Services",
					"icon":"lnr-users",
					"list":	[
								{"name":"Drivers & Taxi","Urls":""},
								{"name":"Tutors","Urls":""},
								{"name":"Event Services","Urls":""},
								{"name":"Consultants","Urls":""},
								{"name":"Maids & Domestic Help","Urls":""},
								{"name":"Travel & Visa","Urls":""},
								{"name":"Car Rental","Urls":""}
							]
				},
				{	
					"title":"Vehicles",
					"icon":"lnr-car",
					"list":	[
								{"name":"Cars","Urls":""},
								{"name":"Bikes & Accessories","Urls":""},
								{"name":"Buses,Vans & Truck","Urls":""},
								{"name":"Accessories","Urls":""},
								{"name":"Boats","Urls":""},
								{"name":"Tractors & Trailers","Urls":""}
							]
				},
				{	
					"title":"Real Estate",
					"icon":"lnr-apartment",
					"list":	[
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""}
							]
				},
				{	
					"title":"Jobs",
					"icon":"lnr-briefcase",
					"list":	[
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""}
							]
				},
				{	
					"title":"Furniture & Home Decor",
					"icon":"lnr-diamond",
					"list":	[
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""}
							]
				},
				{	
					"title":"Animals",
					"icon":"lnr-paw",
					"list":	[
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""}
							]
				},
				{	
					"title":"Fashion & Beauty",
					"icon":"lnr-diamond",
					"list":	[
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""},
								{"name":"","Urls":""}
							]
				}
			]*/
    	return view('template\main',['data'=>$data]);
    }
}
