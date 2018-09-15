<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstagramUser extends Model
{
    use SoftDeletes;

    protected $table = 'instagram_users';

    protected $fillable = ['user_id', 'user_name', 'profile_image_url'];
}
