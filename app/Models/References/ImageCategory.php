<?php

namespace App\Models\References;

use Illuminate\Database\Eloquent\Model;

class ImageCategory extends Model
{
    public $timestamps = false;
    public const PROJECT_FEATURED = 1;
    public const NEWS_FEATURED = 2;
    public const PROJECT_GALLERY = 3;
    public const NEWS_GALLERY = 4;

    public static $stringRepresentation = [
        self::PROJECT_FEATURED => "PROJECT_FEATURED",
        self::PROJECT_GALLERY => "PROJECT_GALLERY",
        self::NEWS_FEATURED => "NEWS_FEATURED",
        self::NEWS_GALLERY => "NEWS_GALLERY"
    ];

    public static function getCategoryName(int $id){
        return self::$stringRepresentation[$id];
    }

    public function getCategoryNameAttribute(){
        return self::getCategoryName($this->id);
    }
}
