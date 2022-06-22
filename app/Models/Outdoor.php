<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Outdoor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];


    protected static function booted()
    {
        static::deleting(function (Outdoor $outdoor) {

            if(Storage::disk('outdoor')->exists($outdoor->filename)) {
                Storage::disk('outdoor')->delete($outdoor->filename);
            }
        });
    }

}
