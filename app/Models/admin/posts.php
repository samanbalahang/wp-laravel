<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'uri',
        'title',
        'post_desc',
        'main_img',
        'content',
        'sort'
    ];
}
