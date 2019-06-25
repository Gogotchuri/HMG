<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function index(){
        //No functionality yet just load main page of admin
        return view("admin.dash");
    }
}
