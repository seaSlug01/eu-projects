<?php

namespace App\Models;

use App\Models\EuPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EuCategory extends Model
{

    use HasFactory;

    protected $fillable = ['name'];

    public function euPosts()
    {
        return $this->belongsToMany(EuPost::class, 'eu_post_eu_category');
    }
}
