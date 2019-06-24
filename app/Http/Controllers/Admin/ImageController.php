<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ImageController extends Controller
{
    /**
     * Stores image for article featured
     * @param int $article_id
     * @param Request $request
     */
    public function articleFeatured(int $article_id, Request $request){
        //TODO

    }

    /**
     * Stores image for article gallery
     * @param int $article_id
     * @param Request $request
     */
    public function articleGallery(int $article_id, Request $request){
        //TODO

    }

    /**
     * Stores image for project featured image
     * @param int $project_id
     * @param Request $request
     */
    public function projectFeatured(int $project_id, Request $request){
        //TODO

    }

    /**
     * Stores image for project gallery
     * @param int $project_id
     * @param Request $request
     */
    public function projectGallery(int $project_id, Request $request){
        //TODO
    }


    /**
     * Display the specified resource.
     * Adequate for ajax call
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $image = Image::where("id",$id)->first();
        if($image == null) return response()->json(["errors" => ["Image not found!"]], 404);
        return response()->json(["image_url" => $image->url]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $image = Image::where("id",$id)->first();
        if($image == null) return response()->json(["errors" => ["Image not found!"]], 404);
        $image->delete();
        return response()->json(["data" => "success"]);
    }
}
