<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Partner;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'submission_date',
        'description',
        'coordinator',
        'attachments',
        'approval_status',
        'budget'
    ];

    protected $casts = [
        'attachments' => 'array', // Automatically cast attachments to array when retrieving from the DB
    ];

    const APPROVAL_STATUSES = [
        'approved' => 'Εγκρίθηκε',
        'under_consideration' => 'Υπο Εξέταση',
        'not_approved' => 'Δεν έχει εγκριθεί',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Define relationships

    public function coordinator()
    {
        return $this->belongsTo(Partner::class);
    }

    /**
     * Get the categories associated with the proposal.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_proposal', 'proposal_id', 'category_id')
                    ->withTimestamps();
    }

    /**
     * Get the partners associated with the proposal.
     */
    public function partners()
    {
        return $this->belongsToMany(Partner::class, 'proposal_partner', 'proposal_id', 'partner_id')->withPivot(['order', 'assignments'])
                    ->withTimestamps();
    }



}
