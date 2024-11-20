<?php

namespace App\Models;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'fullname',
        'email',
        'tel',
        'occupation',
        'occupation_description'
    ];

    const OCCUPATIONS = [
        'Administrative Support' => 'Γραμματειακή Υποστήριξη',
        'CEO' => 'Διευθύνων Σύμβουλος (CEO)',
        'HR Manager' => 'Διευθυντής Ανθρώπινου Δυναμικού (HR Manager)',
        'IT Manager' => 'Διευθυντής Πληροφορικής (IT Manager)',
        'Techical Support' => 'Τεχνική Υποστήριξη',
        'Accounting Manager' => 'Υπεύθυνος Λογιστηρίου',
        'Other' => 'Άλλο',
    ];

    

    protected static function boot()
    {
        parent::boot();

        // Automatically set fullname when user gets created
        static::creating(function ($contact) {
            $contact->fullname = "{$contact->firstname} {$contact->lastname}";
        });

        // Automatically set fullname when user gets updated
        static::updating(function ($contact) {
            $contact->fullname = "{$contact->firstname} {$contact->lastname}";

            if($contact->occupation && $contact->occupation !== "Other") {
                $contact->occupation_description = "";
            }
            
        });
    }

    public function partners()
    {
        return $this->belongsToMany(Partner::class, 'contact_partner');
    }

}
