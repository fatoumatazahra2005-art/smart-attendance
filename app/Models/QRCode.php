<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    protected $fillable = ['session_id', 'code', 'type', 'expires_at'];
    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
