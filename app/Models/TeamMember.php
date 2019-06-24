<?php

namespace App\Models;

use App\Models\References\ImageCategory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function getImageAttribute(){
        return Image::where("member_id", $this->id)->where("category_id", ImageCategory::MEMBER_PICTURE)->first();
    }
}
