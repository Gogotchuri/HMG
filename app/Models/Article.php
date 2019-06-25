<?php

namespace App\Models;

use App\Models\References\ImageCategory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function getFeaturedImageAttribute(){
        return Image::where("article_id", $this->id)->where("category_id", ImageCategory::NEWS_FEATURED)->first();
    }

    public function getGalleryImagesAttribute(){
        return Image::where("article_id", $this->id)->where("category_id", ImageCategory::NEWS_FEATURED)->first();
    }
}
