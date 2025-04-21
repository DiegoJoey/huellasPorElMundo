<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;
use App\Models\User;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'animal_id', 'image_path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
