<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $item_id 商品ID
 * @property string $name 商品名
 * @property int $price 商品価格
 */

class EloquentItem extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'item_id';
    public $timestamps = false;

    protected $fillable = ['item_id', 'name', 'price'];
}
