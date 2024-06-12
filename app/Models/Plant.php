<?php

// app/Models/Plant.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'price', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
