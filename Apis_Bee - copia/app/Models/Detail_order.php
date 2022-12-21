<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_order extends Model
{
    use HasFactory;
    protected $table = "detail_orders";

    protected $fillable =[

        'cantidad',
        'precio_unitario',
        'precio_total',
    ];

}
