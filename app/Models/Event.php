<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'date', 'location', 
        'ticket_link', 'is_featured'
    ];
    
    protected $casts = [
        'date' => 'datetime',
        'is_featured' => 'boolean'
    ];
}