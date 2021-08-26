<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_managements extends Model
{
    use HasFactory;
    protected $fillable = ['project_name', 'project_type_id','image','description','owner_name','owner_phn','owner_email','actual_start_date','actual_end_date','expected_end_date'];
}
