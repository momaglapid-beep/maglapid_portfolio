<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'hero_title', 'hero_subtitle', 'hero_bg_image',
        'about_intro_title', 'about_intro_text', 'about_description',
        'contact_location', 'contact_phone', 'contact_email', 'contact_web',
        'logo', 'logo_dark', 'social_facebook', 'social_twitter',
        'social_dribbble', 'social_behance', 'social_linkedin'
    ];
}
