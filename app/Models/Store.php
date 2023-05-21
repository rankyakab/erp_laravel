<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    // Relationship With Tasks
    public function stock()

    {


        return $this->belongsTo(Stock::class, 'stock_id');
    }

    public function actor()

    {


        return $this->belongsTo(User::class, 'actor_id');
    }

    public function request()

    {


        return $this->belongsTo(Stockrequest::class, 'request_id');
    }
}
