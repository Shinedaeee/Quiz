<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
<<<<<<< HEAD
    protected $fillable = ['title', 'category', 'description'];
=======
    public $timestamps = false;

    protected $fillable = ['title', 'image'];
>>>>>>> 5c19296a6e7f22dae81376a2f83748d87c378b08

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

