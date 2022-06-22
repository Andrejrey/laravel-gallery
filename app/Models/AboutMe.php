<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AboutMe extends Model
{
    use HasFactory;
    protected $table = 'about_me';
    public $timestamps = false;
    protected $guarded = ['id'];

    protected static function booted()
    {
        static::deleting(function (AboutMe $aboutMe) {

            if(Storage::disk('about_me')->exists($aboutMe->img)) {
                Storage::disk('about_me')->delete($aboutMe->img);
            }
        });
    }
}
