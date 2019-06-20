<?php

namespace App\Http\Controllers\Front;

use App\Mail\JobApplication;
use App\Mail\RequestInformation;
use App\Mail\ScheduleMeeting;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class MailController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
     * @throws ValidationException
     */
    public function requestInformation(Request $request){
        $this->validate($request, ["email" => ["required", "mail"]]);
        $info = $request;//TODO Format accordingly
        Mail::to($request["email"])->send(new RequestInformation($info));
        return view("public.requestInformation");
    }

    /**
     * @param Request $request
     * @return Factory|View
     * @throws ValidationException
     */
    public function scheduleMeeting(Request $request){
        $this->validate($request, ["email" => ["required", "mail"]]);
        $info = $request;//TODO Format accordingly
        Mail::to($request["email"])->send(new ScheduleMeeting($info));
        return view("public.scheduleMeeting");
    }

    /**
     * @param $job_id
     * @param Request $request
     * @return Factory|View
     * @throws ValidationException
     */
    public function submitApplication($job_id, Request $request){
        $this->validate($request, ["email" => ["required", "mail"]]);
        //TODO create Job model/migration
        $info = $request;//TODO Format accordingly
        Mail::to($request["email"])->send(new JobApplication($info));
        return redirect()->back();
    }
}
