<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

	public $table = 'blog';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'author', 'date', 'body', 'imgsrc'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}