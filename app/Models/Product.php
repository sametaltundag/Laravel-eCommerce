<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;
    protected $fillable=[
        'name',
        'slug',
        'image',
        'content',
        'category_id',
        'status',
        'quantity',
    ];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id'); // 1. veri parametredeki tablo, 2. veri ('id') ise Product tablosuna ait sütunundur
     }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
