<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media as SpatieMedia;

class Media extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'type',
        'category_id',
        'alt_text',
        'description'
    ];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery')
            ->withResponsiveImages();
    }


    public static function getYoutubeId($url)
    {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
        return isset($match[1]) ? $match[1] : null;
    }
}
