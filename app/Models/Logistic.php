<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    use HasFactory;

    public function requestedBy()
    {
        return $this->belongsTo(User::class, 'requested_by');
    }
    // Relationship With Tasks
    public function sentTo()
    {
        return $this->belongsTo(User::class, 'sent_to');
    }
}
