<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class picture extends Model
{
    public $timestamps = FALSE;

    protected $table = 'pictures';
    protected $fillable = [
        'pic_name',
        'pic_author',
        'pic_date',
        'pic_url'
    ];
}
