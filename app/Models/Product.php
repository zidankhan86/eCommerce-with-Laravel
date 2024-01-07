<?php

namespace App\Models;

use App\Models\ProductRating;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ProductCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

        public function ratings()
        {
        return $this->hasMany(ProductRating::class);
        }
        public function averageRating()
        {
            return $this->ratings->avg('rating');
        }

        
}
