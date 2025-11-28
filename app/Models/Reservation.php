<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

protected $fillable = [
    'guest_name',
    'phone',
    'email',
    'check_in',
    'check_out',
    'room_type',
    'price_per_night',
    'total_price',
    'status'
];



    
    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
        'price_per_night' => 'integer',
        'total_price' => 'integer',
    ];
}
