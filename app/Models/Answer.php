<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
<<<<<<< HEAD
    protected $fillable = ['question_id', 'text', 'is_correct'];
=======
    public $timestamps = false;

    protected $fillable = ['question_id', 'answer_text', 'is_correct'];
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

