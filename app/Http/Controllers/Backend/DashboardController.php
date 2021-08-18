<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function dashboard(Request $request) {
    	if(Auth::user()->is_role == 1 || Auth::user()->is_role == 2){
    		return view('backend.admin.dashboard');
    	}else if(Auth::user()->is_role == 3){
    		return view('backend.school.dashboard');
    	}else if(Auth::user()->is_role == 4){
    		return view('backend.teacher.dashboard');
    	}
    }
}