<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'image'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

