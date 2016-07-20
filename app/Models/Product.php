<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
   use \App\Scope\PublishedTrait;
   use SoftDeletes;
   protected $casts = ['price' => 'double',];
   protected $dates = ['deleted_at'];
   public $timestamps = false;
   //protected $primaryKey = 'product_id';
   protected $fillable = ['name', 'description', 'price', 'stock'];
   protected $visible = ['name', 'price', 'stock'];

   public function scopeOverstock($query)
	{
		return $query->where('stock', '>', 30);
	}

	public function scopeOverprice($query)
	{
		return $query->where('price', '>', 400000000);
	}

	public function scopePremium($query)
	{
		return $query->overstock()->overprice();
	}

	public function scopeLevel($query, $parameter)
	{
		switch ($parameter) {
			case 'lux':
				return $query->where('price', '>', 500000000);
				break;
			case 'mid':
				return $query->whereBetween('price', [300000000,500000000]);
				break;
			case 'entry':
				return $query->where('price', '<', 300000000);
				break;
			default:
				return $query;
				break;
		}
	}

	/*protected static function boot()
	{
		parent::boot();
		static::observe(new \App\Models\ProductObserver);
		static::updating(function($model) {
			if ( DB::table('orders_products')->where('product_id', $model->id)->count() > 0 && $model->isDirty('name')) {
			return false;
			}
		});
	}*/


}
