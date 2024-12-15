<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_id',
        'full_name',
        'profession',
        'specialization',
        'bio'
    ];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
