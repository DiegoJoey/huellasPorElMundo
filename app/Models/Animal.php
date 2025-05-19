<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Animal extends Model
{
    protected $fillable = ['name', 'type', 'breed', 'age', 'time_in_shelter', 'description', 'image_path', 'state'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
