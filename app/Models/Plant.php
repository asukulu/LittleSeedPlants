<?php

// app/Models/Plant.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug', 
        'description', 
        'price', 
        'image', 
        'category_id', 
        'size',
        'light_requirements',
        'pet_friendly'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
    // app/Models/Category.php
    public function plants()
    {
        return $this->belongsToMany(Plant::class);
    }
}