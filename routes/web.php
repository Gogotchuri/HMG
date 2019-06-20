<?php

Auth::routes();

Route::namespace("Front")->group(function() {
    Route::get("/", "PageController@home");
    Route::get("/about", "PageController@about");
    Route::get("/team", "PageController@team");
    Route::get("/contact", "PageController@contact");
    Route::get("/partnership", "PageController@partnership");
    Route::get("/hotel-management", "PageController@hotelManagement");
    Route::get("/revenue-optimization", "PageController@revenueOptimization");
    Route::get("/condo-management", "PageController@condoManagement");
    Route::get("/receivership", "PageController@receivership");
    Route::get("/development", "PageController@development");
    
    Route::prefix("/careers")->group(function() {
       Route::get("/", "PageController@careers");
       Route::get("/{id}", "JobsController@show");
    });
    

    Route::prefix("/news")->group(function() {
       Route::get("/", "NewsController@index");
       Route::get("/{id}", "NewsController@show");
    });

    //Mailing
    Route::post("/schedule-meeting", "MailController@scheduleMeeting");
    Route::post("/request-information", "MailController@requestInformation");
    Route::post("/jobs/{job_id}/application", "MailController@submitApplication");

});

Route::get('lang/{locale}', 'LocalizationController@index');

//Admin Routed TODO middleware admin
Route::namespace("Admin")->prefix("/admin")->group(function(){
   Route::get("/", "DashController@index");
   Route::resource("/news", "NewsController");
});
