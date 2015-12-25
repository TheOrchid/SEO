<?php namespace Orchid\SEO\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\SEO\SeoTrait\SeoTrait;

class SEO extends Model
{
    use SeoTrait;

    protected $table = 'seo';

    protected $fillable = [
        'story_id',
        'url',
        'route',
        'title',
        'description',
        'keywords',
        'robots',
        'image',
        'video',
        'audio',
        'custom',
    ];

    protected $casts = [
        'custom' => 'array',
        'image' => 'array',
    ];


}