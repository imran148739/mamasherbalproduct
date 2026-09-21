<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'sku',
        'short_description',
        'description',
        'price',
        'old_price',
        'stock_quantity',
        'badge',
        'rating',
        'is_featured',
        'is_best_selling',
        'best_selling_order',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'price'              => 'decimal:2',
        'old_price'          => 'decimal:2',
        'stock_quantity'     => 'integer',
        'rating'             => 'decimal:2',
        'is_featured'        => 'boolean',
        'is_best_selling'    => 'boolean',
        'best_selling_order' => 'integer',
        'is_active'          => 'boolean',
        'sort_order'         => 'integer',
    ];

    public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name);
            }
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order', 'asc');
    }

    public function primaryImage(): HasOne
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }

    public function getPrimaryImageUrlAttribute(): string
    {
        // 1. Try designated primary image
        $primary = $this->images->firstWhere('is_primary', true);
        if ($primary) {
            return $primary->url;
        }

        // 2. Try first gallery image
        $first = $this->images->first();
        if ($first) {
            return $first->url;
        }

        // 3. Default placeholder
        return asset('img/product/product1.png');
    }

    public function getSecondaryImageUrlAttribute(): ?string
    {
        // Second image in gallery for hover effect
        $second = $this->images->skip(1)->first();
        return $second ? $second->url : null;
    }

    public function getFormattedPriceAttribute(): string
    {
        return '₹' . number_format($this->price, 2);
    }

    public function getFormattedOldPriceAttribute(): ?string
    {
        return $this->old_price ? '₹' . number_format($this->old_price, 2) : null;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeBestSelling($query)
    {
        return $query->where('is_best_selling', true)->orderBy('best_selling_order', 'asc');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('id', 'desc');
    }
}
