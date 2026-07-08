<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'teacher_id'];
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class);
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
