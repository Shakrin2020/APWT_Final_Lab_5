<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WantedPost extends Model
{
    use HasFactory;

    protected $table = 'wantedpost';
    public $timestamps = false;
}
