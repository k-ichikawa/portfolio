<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
    use SoftDeletes;

    protected $table = 'inquiries';

    protected $fillable = ['first_name', 'last_name', 'mail_address', 'message'];
}
