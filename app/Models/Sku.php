<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sku
 *
 * @property int $id
 * @property int $product_id
 * @property string $sku
 * @property string $price
 * @property int $stock
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sku query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sku whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Sku extends Model
{
    use HasFactory;

    protected $guarded = [];


}
