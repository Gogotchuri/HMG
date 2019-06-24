<?php

namespace App\Models;

use App\Models\References\ImageCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Image extends Model
{
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

    /**
     * Takes uploaded file, stores it in the local storage and saves image in the database
     * @param UploadedFile $file
     * @param Project $project
     */
    public function storeForProjectFeatured(UploadedFile $file, Project $project){
        //TODO write image to the local storage
    }

    /**
     * Takes uploaded file, stores it in the local storage and saves image in the database
     * @param UploadedFile $file
     * @param Project $project
     */
    public function storeForProjectGallery(UploadedFile $file, Project $project){
        //TODO write image to the local storage
    }

    /**
     * Takes uploaded file, stores it in the local storage and saves image in the database
     * @param UploadedFile $file
     * @param Article $project
     */
    public function storeForArticleFeatured(UploadedFile $file, Article $project){
        //TODO write image to the local storage
    }

    /**
     * Takes uploaded file, stores it in the local storage and saves image in the database
     * @param UploadedFile $file
     * @param Article $project
     */
    public function storeForArticleGallery(UploadedFile $file, Article $project){
        //TODO write image to the local storage
    }

}
