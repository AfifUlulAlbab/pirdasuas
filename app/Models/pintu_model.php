<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pintu_model extends Model
{
    use HasFactory;
    protected $table = "data";
    protected $fillable = ["sumbu_x", "sumbu_y", "status"];
}