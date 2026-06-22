<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description',
        'image', 'url', 'client', 'completion_date',
        'is_featured', 'sort_order'
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'completion_date' => 'date',
        ];
    }
}
