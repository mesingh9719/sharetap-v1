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

    public function basicInfo()
    {
        return $this->hasOne(WebsiteBasicInfo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
