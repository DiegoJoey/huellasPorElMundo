<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Donation extends Model
{
    protected $fillable = ['user_id', 'amount', 'category', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
