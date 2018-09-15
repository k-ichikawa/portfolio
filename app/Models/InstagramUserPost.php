<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstagramUserPost extends Model
{
    use SoftDeletes;

    protected $table = 'instagram_user_posts';

    protected $fillable = ['instagram_user_id', 'post_id', 'text', 'post_url', 'post_image_url', 'like_count', 'posted_at'];
}
