<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'website_goal',
        'template',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function businessProfile()
    {
        return $this->hasOne(BusinessProfile::class);
    }

    public function individualProfile()
    {
        return $this->hasOne(IndividualProfile::class);
    }
}
