<?php

Auth::routes();

Route::namespace("Front")->group(function() {
    Route::get("/", "PageController@home");
    Route::get("/about", "PageController@about");
    Route::get("/team", "PageController@team");
    Route::get("/contact", "PageController@contact");
    Route::get("/hotel-management", "PageController@hotelManagement");
    Route::get("/revenue-optimization", "PageController@revenueOptimization");
    Route::get("/condo-management", "PageController@condoManagement");
    Route::get("/receivership", "PageController@receivership");
    Route::get("/development", "PageController@development");
    
    Route::prefix("/careers")->group(function() {
       Route::get("/", "JobController@index");
       Route::get("/{id}", "JobController@show");
    });
    
    Route::get("/partners", "PartnerController@index");

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

   Route::prefix("/projects")->group(function () {
       Route::resource("", "ProjectController");
       Route::post("/{project_id}/gallery-image", "ImageController@projectGallery");
       Route::post("/{project_id}/featured-image", "ImageController@projectFeatured");
    });

    Route::prefix("/articles")->group(function () {
        Route::resource("", "NewsController");
        Route::post("/{article_id}/gallery-image", "ImageController@articleGallery");
        Route::post("/{article_id}/featured-image", "ImageController@articleFeatured");
    });

   Route::resource("/partners", "PartnerController");
   Route::resource("/jobs", "JobController");

   Route::prefix("/images")->group(function(){
       Route::get("/{id}", "ImageController@ishow");
       Route::delete("/{id}", "ImageController@destroy");
   });

});
