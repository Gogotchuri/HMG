<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(){
        return view("public.home");
    }

    public function about(){
        return view("public.about");
    }

    public function team(){
        return view("public.team");
    }

    public function contact(){
        return view("public.contact");
    }

    public function partnership(){
        return view("public.partnership");
    }

    public function hotelManagement(){
        return view("public.hotelManagement");
    }

    public function revenueOptimization(){
        return view("public.revenueOptimization");
    }

    public function condoManagement(){
        return view("public.condoManagement");
    }

    public function receivership(){
        return view("public.receivership");
    }

    public function development(){
        return view("public.development");
    }
    
}
