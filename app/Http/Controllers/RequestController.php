<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Service;
use DB;
class RequestController extends Controller
{
    public function search(Request $request ){
    	$service = $request->input('param');
    	$data = Service::where('ser_categoria', 'LIKE', '%'.$service.'%')->get();
    	$result = array();
    	foreach ($data as $key => $value) {
    		$result[] = $value->ser_categoria.' '.$value->ser_subcategoria;
    	}
    	
    	//print_r(DB::getQueryLog());
    	//echo $result->toJson();
    	echo json_encode($result);

    }
}
