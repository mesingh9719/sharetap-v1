<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteBasicInfo extends Model
{
    /** @use HasFactory<\Database\Factories\WebsiteBasicInfoFactory> */
    use HasFactory;

    protected $fillable = [
        'website_id',
        'site_name',
        'tagline',
        'logo',
        'favicon',
        'primary_color',
        'secondary_color',
        'accent_color',
        'footer_text',
        'footer_logo',
        'email',
        'phone',
        'address',
        'google_maps_link',
        'social_links'
    ];

    protected $casts = [
        'social_links' => 'array'
    ];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
