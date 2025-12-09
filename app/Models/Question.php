<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
<<<<<<< HEAD
    protected $fillable = ['quiz_id', 'text'];
=======
    public $timestamps = false;

    protected $fillable = ['quiz_id', 'question_text'];
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
<<<<<<< HEAD

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
=======
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08
}

