<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';

    protected $fillable = [
        'email',
        'name',
        'phone',
        'topic',
        'status',
        'user_id',
        'nim_nip',
        'faculty',
        'file_upload',
        'confirmation_email',
        'request_detail'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
