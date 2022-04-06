<?php

namespace App\Http\Controllers\Front;
use Resources\Views\admin\dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_login(){
        return view('front.admin_login');
    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
}
