<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Distribute extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user that owns the Distribute
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ShopName(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }

    /**
     * Get the user that owns the Distribute
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function StockRelation(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
