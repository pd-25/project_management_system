<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;
    protected $fillable = ['dep_id','full_name','designtion','dob', 'address','doj','aadhar_card','image','status'];
}
