<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'student_id',
        'session_id',
        'check_in_time',
        'check_out_time',
        'status',
        'device_id'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id');
    }
}
