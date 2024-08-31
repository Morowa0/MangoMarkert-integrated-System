<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mangotype extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'mangotypes';

    // Mass assignable attributes
    protected $fillable = [
        'buyer_id',
        'typename',
        'image',
        'duration',
        'price',
    ];

    /**
     * Get the buyer associated with the mango type.
     */
    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }
}
