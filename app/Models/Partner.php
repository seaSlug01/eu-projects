<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Proposal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Partner extends Model
{
    use Notifiable;
    use HasFactory;

    protected $fillable = [
        'name',
        'address_name',
        'address_number',
        'full_address',
        'email',
        'tel',
        'postal_code',
        'country',
        'town',
        'website',
        'logo',
        'attachments',
    ];

    protected $casts = [
        'attachments'=>'array'
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->full_address = "{$model->address_name} {$model->address_number}";
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_partner');
    }
    

    public function proposals() {
        return $this->belongsToMany(Proposal::class, 'proposal_partner', 'partner_id', 'proposal_id')->withTimestamps();
    }

    public function posts() {
        return $this->belongsToMany(Post::class, 'partner_post')->withPivot(['order'])->withTimestamps();
    }

    public function proposalsCoordinator() {
        return $this->hasMany(Proposal::class, 'coordinator');
    }

    public function postsCoordinator() {
        return $this->hasMany(Post::class, 'coordinator');
    }
}
