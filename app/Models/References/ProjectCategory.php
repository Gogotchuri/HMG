<?php

namespace App\Models\References;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    public $timestamps = false;
    public const ONGOING = 1;
    public const COMPLETED = 2;

    public static $stringRepresentation = [
        self::ONGOING => "ONGOING",
        self::COMPLETED => "COMPLETED"
    ];

    public static function getCategoryName(int $id){
        return self::$stringRepresentation[$id];
    }

    public function getCategoryNameAttribute(){
        return self::getCategoryName($this->id);
    }
}
