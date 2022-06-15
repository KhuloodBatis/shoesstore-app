<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use App\Models\Product;
use App\Models\Stock;
use Cknow\Money\Money;

class Variation extends Model
{
    use HasFactory;

    use HasRecursiveRelationships;

    public function formattedPrice()
    {
        return Money::USD($this->price);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
