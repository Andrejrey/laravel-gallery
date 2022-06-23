<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Indoor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    protected static function booted()
    {
        static::deleting(function (Indoor $indoor) {

            if(Storage::disk('indoor')->exists($indoor->filename)) {
                Storage::disk('indoor')->delete($indoor->filename);
            }
        });
    }

}
