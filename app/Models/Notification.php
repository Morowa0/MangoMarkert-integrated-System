<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'buyer_id',
        'message',
        'is_read',
    ];

    // Define the relationship with the User model (assuming the buyer is a user)
    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }
}
