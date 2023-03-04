<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Post extends Model
{
    use HasFactory;
    protected  $guarded = [];
    protected  $perPage=10;
    function user()
    {
            // dd($this->belongsTo(User::class));
        return $this->belongsTo(User::class);
    }
}
