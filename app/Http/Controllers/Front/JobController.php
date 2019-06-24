<?php

namespace App\Http\Controllers\Front;

use App\Models\Job;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return view("public.career", compact("jobs"));//all jobs
    }

    public function show(int $id){
        $job = Job::findOrFail($id);
        return view("public.job", compact("job"));
    }

}
