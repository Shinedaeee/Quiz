<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;

    protected $fillable = ['quiz_id', 'question_text'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}

