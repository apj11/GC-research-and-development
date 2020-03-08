<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        protected $fillable=['productdetails_id','username', 'comment' ,'email','rating'];
}
