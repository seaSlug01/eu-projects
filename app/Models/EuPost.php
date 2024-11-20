<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EuPost extends Model
{
    use HasFactory;

    protected $table = 'eu_posts';

    protected $fillable = [
        'title',
        'starts_from',
        'ends_at',
        'partners',
        'website',
        'authority',
        'program_managing_entity',
        'description',
        'image',
    ];

    protected $casts = [
        'partners' => 'array',
    ];
}
