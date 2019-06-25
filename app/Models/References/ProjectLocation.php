<?php

namespace App\Models\References;

use Illuminate\Database\Eloquent\Model;

class ProjectLocation extends Model
{
    public $timestamps = false;
    public const KAKHETI = 1;
    public const TBILISI = 2;
    public const KVEMO_KARTLI = 3;
    public const MTSKETA_TIANETI= 4;
    public const SIDA_KARTLI = 5;
    public const SAMTSKHE_JAVAKHETI = 6;
    public const IMERETI = 7;
    public const RACHA_LETCKHUMI_KSVNT = 8;
    public const GURIA= 9;
    public const ADJARA = 10;
    public const APKHAZETI = 11;
    public const SAMEGRELO = 12;

    public static $stringRepresentation = [
        self::KAKHETI => "KAKHETI",
        self::TBILISI => "TBILISI",
        self::MTSKETA_TIANETI => "MTSKETA_TIANETI",
        self::IMERETI => "IMERETI",
        self::RACHA_LETCKHUMI_KSVNT => "RACHA_LETCKHUMI_KSVNT",
        self::GURIA => "GURIA",
        self::ADJARA => "ADJARA",
        self::APKHAZETI => "APKHAZETI",
        self::KVEMO_KARTLI => "KVEMO_KARTLI",
        self::SIDA_KARTLI => "SIDA_KARTLI",
        self::SAMTSKHE_JAVAKHETI => "SAMTSKHE_JAVAKHETI",
        self::SAMEGRELO => "SAMEGRELO"
    ];

    public static function getCategoryName(int $id){
        return self::$stringRepresentation[$id];
    }

    public function getCategoryNameAttribute(){
        return self::getCategoryName($this->id);
    }
}
