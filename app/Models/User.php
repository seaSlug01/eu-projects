<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Panel;
use App\Models\Post;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    public function canAccessPanel(Panel $panel):bool{
        return true;//$this->isAdmin === 1;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'organization',
        'telephone',
        'isAdmin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function posts(){
        return $this->belongsToMany(Post::class,'post_user')->withPivot(['order'])->withTimestamps();
    }

    public function getRole(){
        return $this->isAdmin;
    }

    public function postsAuthor()
    {
        return $this->hasMany(Post::class, 'author_id');
    }

    public function proposalsAuthor()
    {
        return $this->hasMany(Proposal::class, 'author_id');
    }

    public function partnersAuthor()
    {
        return $this->hasMany(Partner::class, 'author_id');
    }
}
