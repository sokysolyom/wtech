<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['cart_id', 'Name', 'Adress', 'Email', 'Telephone', 'Payment', 'Delivery'];
    use HasFactory;
}
