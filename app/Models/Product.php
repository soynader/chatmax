<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'price', 'stock', 'categories_id'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id');
        
    }
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
