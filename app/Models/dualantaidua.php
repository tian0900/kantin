<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class dualantaidua extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "dualantaidua";
    protected $primarykey = "id";
}
