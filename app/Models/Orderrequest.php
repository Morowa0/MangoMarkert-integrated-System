<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderrequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'farmer_id',
        'farmer_name',
        'buyer_id',
        'buyer_name',
        'county',
        'quantity',
        'mango_type',
        'duration',
        'price',
    ];
}
