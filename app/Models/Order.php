<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'orders'; // if not following Laravel conventions
    protected $fillable = ['user_id', 'product_id', 'quantity']; // for mass assignment

}
