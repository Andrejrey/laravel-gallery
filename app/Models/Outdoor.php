<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outdoor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];
}