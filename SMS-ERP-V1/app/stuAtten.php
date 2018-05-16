<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stuAtten extends Model
{
    protected $fillable = ['attenStatus','cr_name','atten_date','stu_id'];
    protected $table = "stuatten";
}
