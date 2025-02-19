<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aitools extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'category_id', 'description', 'link', 'hasFreePlan', 'price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function blogposts(){

        return $this->hasMany(Blogposts::class);
        
    }
}
