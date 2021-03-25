<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    public function subject() {
        return $this->belongsTo(Email_subject::class, 'email_subject_id');
    }
}
