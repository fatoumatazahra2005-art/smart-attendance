<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = ['student_id', 'class_id'];
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'class_id');
    }
}
