<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'blog';

    protected $fillable = [
      'blog_id', 'blog_name', 'blog_url', 'blog_desc',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
