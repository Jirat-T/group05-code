<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
  public function product_images()
  {
    return $this->belongsTo('App\ProductImage', 'product_id');
  }
}
