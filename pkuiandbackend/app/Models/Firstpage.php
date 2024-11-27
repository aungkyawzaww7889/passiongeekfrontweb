<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firstpage extends Model
{
    use HasFactory;
    protected $table = "firstpages";
    protected $primaryKey = "id";
    protected $fillable = [
        "captionname",
        "image"
    ];
}
