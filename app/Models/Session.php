<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'subject_id',
        'class_id',
        'teacher_id',
        'date',
        'start_time',
        'end_time',
        'room',
        'status'
    ];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'class_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function qrCodes()
    {
        return $this->hasMany(QRCode::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
