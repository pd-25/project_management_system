<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectdeps extends Model
{
    use HasFactory;
    protected $fillable = ['project_id', 'dep_id'];
}
