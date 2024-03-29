<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'votable_id', 'votable_type', 'user_id', 'vote_type',
    ];

    public function votable()
    {
        return $this->morphTo();
    }
}
