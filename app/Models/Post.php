<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'excerpt',
        'image_path',
        'is_published',
        'mins_to_read'
    ];

    // protected $timestamps = false;
    // protected $datetime = 'U';
    // protected $connection = 'sqlite';

    // protected $attributes = [
    //     'is_published' => true,
    // ];

}
