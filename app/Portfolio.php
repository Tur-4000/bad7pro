<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'url',
        'type',
        'date',
    ];
}
