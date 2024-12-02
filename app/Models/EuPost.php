<?php

namespace App\Models;

use App\Models\EuCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'eu_categories',
    ];

    protected $casts = [
        'partners' => 'array',
        'eu_categories' => 'array',
    ];

    public function euCategories()
    {
        return EuCategory::whereIn('id', $this->eu_categories)->get();
    }
}
