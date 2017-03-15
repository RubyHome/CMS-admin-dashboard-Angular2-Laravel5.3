<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    //
    protected $table = 'templates';

    protected $fillable = [
        'title', 'description', 'summary', 'meta_title', 'meta_description', 'is_active',
    ];
    protected $fillable1 = [
        'title', 'description', 'summary', 'meta_title', 'meta_description', 'is_active',
    ];
}
