<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\HotelApiResource;
use App\Hotel;

class HotelsController extends Controller
{
	public function HotelsAutocomplete(Request $request){

		$hotels = Hotel::where('name', 'like', '%' . $request->name . '%')->get();
		$resource = HotelApiResource::collection( $hotels );

        return $resource;
	}
}