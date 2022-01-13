<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public $timestamps = FALSE;

    protected $table = 'users';
    protected $fillable = [
        'us_id',
        'us_mail',
        'us_pass'
    ];
}
