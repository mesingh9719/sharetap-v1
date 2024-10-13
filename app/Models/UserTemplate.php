<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTemplate extends Model
{
    /** @use HasFactory<\Database\Factories\UserTemplateFactory> */
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'user_id',
        'template_id',
        'unique_url',
        'profession',
        'social_medias',
        'templates'
    ];

    protected $casts = [
        'social_medias' => 'array',
        'templates' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

}
