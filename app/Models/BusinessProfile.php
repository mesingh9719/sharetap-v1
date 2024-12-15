<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_id',
        'business_name',
        'business_type',
        'business_description'
    ];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
