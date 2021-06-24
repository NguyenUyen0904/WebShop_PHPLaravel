<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
class AdminController extends Controller
{
	 public function index(){
    	return view ('admin_login');
    }
     public function showDashboard(){
    	return view ('admin_layout');
    }
}
