<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order_table';

    protected $fillable = [
        'product_id',
        'user_id',
        'price',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'user_id' => 'integer',
        'price' => 'decimal:2',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }
}
