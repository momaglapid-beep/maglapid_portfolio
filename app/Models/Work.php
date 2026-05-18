<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title', 'category', 'image', 'description',
        'leader', 'designer', 'developer', 'customer'
    ];
}
