<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSectionItem extends Model
{
    protected $fillable = [
        'section',
        'product_id',
        'title',
        'subtitle',
        'description',
        'button_text',
        'button_url',
        'image',
        'secondary_image',
        'price',
        'old_price',
        'badge',
        'rating',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active'   => 'boolean',
            'product_id'  => 'integer',
            'rating'      => 'integer',
            'sort_order'  => 'integer',
        ];
    }

    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeForSection($query, string $section)
    {
        return $query->where('section', $section)->with(['product.images', 'product.category']);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('id', 'asc');
    }

    public function getImageAttribute($value): ?string
    {
        if ($value) {
            $cleaned = ltrim($value, '/');
            return str_starts_with($cleaned, 'public/') ? substr($cleaned, 7) : $cleaned;
        }
        if ($this->product) {
            $primary = $this->product->images->firstWhere('is_primary', true) ?? $this->product->images->first();
            return $primary ? $primary->image_path : null;
        }
        return null;
    }

    public function getSecondaryImageAttribute($value): ?string
    {
        if ($value) {
            $cleaned = ltrim($value, '/');
            return str_starts_with($cleaned, 'public/') ? substr($cleaned, 7) : $cleaned;
        }
        if ($this->product) {
            $second = $this->product->images->skip(1)->first();
            return $second ? $second->image_path : null;
        }
        return null;
    }

    public function getTitleAttribute($value): ?string
    {
        return $value ?: ($this->product ? $this->product->name : null);
    }

    public function getPriceAttribute($value): ?string
    {
        if ($value) return str_replace('$', '₹', $value);
        if ($this->product) return $this->product->formatted_price;
        return null;
    }

    public function getOldPriceAttribute($value): ?string
    {
        if ($value) return str_replace('$', '₹', $value);
        if ($this->product) return $this->product->formatted_old_price;
        return null;
    }

    public function setPriceAttribute($value): void
    {
        $this->attributes['price'] = $value !== null ? str_replace('$', '₹', (string) $value) : null;
    }

    public function setOldPriceAttribute($value): void
    {
        $this->attributes['old_price'] = $value !== null ? str_replace('$', '₹', (string) $value) : null;
    }

    public function getBadgeAttribute($value): ?string
    {
        return $value ?: ($this->product ? $this->product->badge : null);
    }

    public function getImageUrlAttribute(): ?string
    {
        $img = $this->image;
        return $img ? asset($img) : null;
    }

    public function getSecondaryImageUrlAttribute(): ?string
    {
        $sec = $this->secondary_image;
        return $sec ? asset($sec) : null;
    }

    public function getDetailUrlAttribute(): string
    {
        if ($this->product && $this->product->slug) {
            return route('product.detail', $this->product->slug);
        }
        if ($this->button_url && $this->button_url !== 'product-details.html' && $this->button_url !== '#' && !str_contains($this->button_url, 'javascript:')) {
            return url($this->button_url);
        }
        // Match product by title if available
        $itemTitle = $this->title;
        if ($itemTitle) {
            $matched = Product::active()->where('name', $itemTitle)->first();
            if ($matched) {
                return route('product.detail', $matched->slug);
            }
        }
        // Fallback to first active product or shop
        $first = Product::active()->first();
        return $first ? route('product.detail', $first->slug) : route('shop');
    }
}
