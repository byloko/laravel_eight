<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OrdersModel;

use Auth;

class OrdersController extends Controller
{
    public function orders_list(Request $request)
    {
		if(Auth::user()->is_role == 1 || Auth::user()->is_role == 2)
    	{
        //  $data['getRecord'] = OrdersModel::get();
          $data['getRecord'] = OrdersModel::getAllRecord($request);
          return view('backend.admin.orders.list', $data);
    	}
    	elseif(Auth::user()->is_role == 3)
    	{	
    		$data['getRecord'] = OrdersModel::getOrders(Auth::user()->id);
    		return view('backend.school.orders.list',$data);
    	}
		elseif(Auth::user()->is_role == 4)
    	{
    		$data['getRecord'] = OrdersModel::getOrders(Auth::user()->id);
	        return view('backend.teacher.orders.list',$data);
    	}
    }
}