<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
   protected $fillable = ['fname','lname','gname','goccup','gphone','sphone','sdob','sblood','sclass','ssection','sgroup','sshift','speradd','spreadd','seeprofile','re_id','sub','date','status'];

   
}
