<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogposts extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'content', 'sender_name', 'aitools_id'
    ];

    public function aitools()
    {
        return $this->belongsTo(Aitools::class);
    }
}
