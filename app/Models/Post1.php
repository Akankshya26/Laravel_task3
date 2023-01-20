<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Post1 extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'slug', 'user_id'];
    //mutate table value
    // public function title(): Attribute
    // {
    //     return Attribute::make(
    //         set: fn ($value) => [
    //             'slug' => str::slug($value),
    //             'title' => $value
    //         ]
    //     );
    // }

    public static function boot()
    {
        parent::boot();
        static::saving(function ($post) {
            $post->slug = Str::slug($post->title);
        });
        static::deleted(function ($post) {
            $post->comments()->delete();
        });
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
