<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Observers\ProjectObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;



#[ObservedBy([ProjectObserver::class])]
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'title',
        'color',
        'slug',
        'category_id',
        'content',
        'tags',
        'published',
        'users_id',
        'description',
        'attachments',
        'submission_date',
        'duration',
        'code',
        'website',
        'budget',
        'coordinator',
    ];

    protected $casts = [
        'tags'=> 'array',
        'users_id' => 'array',
        'attachments'=>'array'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    private static function getEndDate($duration) {
        $endDate = explode('-', $duration)[1];
        return Carbon::createFromFormat('d/m/Y', trim($endDate));
    }

    private static function setFinished($project) {
        if(isset($project->duration)) {
            $endDate = self::getEndDate($project->duration);
            $isFinished = $endDate->isPast();

            $project->finished = $isFinished;
        }
    }

    protected static function boot()
    {
        parent::boot();

        // Automatically set fullname when user gets created
        static::creating(function ($project) {
            self::setFinished($project);
        });

        // Automatically set fullname when user gets updated
        static::updating(function ($project) {
            self::setFinished($project);
        });
    }

    public function coordinator()
    {
        return $this->belongsTo(Partner::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function partners(){
        return $this->belongsToMany(Partner::class,'partner_post')->withPivot(['order'])->withTimestamps();
    }

    public function getHasAttachmentsAttribute(){
        return !empty($this->attachments) && is_array($this->attachments) && count($this->attachments) > 0;
    }
}
