<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseownersToken extends Model
{
    use HasFactory;
    protected $table = "houseownerstoken";
    public $timestamps = false;
}
