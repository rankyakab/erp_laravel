<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;


    protected $fillable = [
        'item',
        'quantity',
        'amount',
        'unit_price',
        'total_price',
        'requested_by',
        'sent_to',
        'date',

    ];
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
