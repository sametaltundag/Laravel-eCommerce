<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'text1',
        'text1_icon',
        'text1_text',
        'text2',
        'text2_icon',
        'text2_text',
        'text3',
        'text3_icon',
        'text3_text',
    ];
}
