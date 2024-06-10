<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    protected $fillable = [
        'order_id',
        'product_id',
        'product_color_id',
        'quantity',
        'total'
    ];
    public function productOrderDetail():belongsTo{
        return $this->belongsTo(Product::class, 'product_id','id');
    }
    public function productColor(): BelongsTo
    {
        return $this->belongsTo(ProductColor::class, 'product_color_id', 'id');
    }
}