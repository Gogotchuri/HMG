<?php

namespace App\Http\Controllers\Front;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function index(){
        $partners = Partner::all();
        return view("public.partnership", compact("partners"));
    }
}
