<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class dualantaisatu extends Model
{
    use HasFactory;

    protected $table = "dualantaisatu";
    protected $primarykey = "id";
}
