<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = ['name', 'level'];

    public function students()
    {
        return $this->belongsToMany(User::class, 'enrollments', 'class_id', 'student_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
