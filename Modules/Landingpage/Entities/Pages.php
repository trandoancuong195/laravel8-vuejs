<?php

namespace Modules\Landingpage\Entities;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pages extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'pages';
    protected $fillable = [
        'name', 'description','slug','use_for_page','create_date','api','start_time','end_time','status'
    ];
    protected $dates = ['created_at', 'updated_at', 'start_time','end_time'];
    protected static function newFactory()
    {
        return \Modules\Landingpage\Database\factories\PagesFactory::new();
    }
}
