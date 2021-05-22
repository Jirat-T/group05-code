<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductImage;
use App\ProductBrand;

class ProductController extends Controller
{
  public function index()
  {
    try {
      $title = 'Product';
      $product = Product::paginate(15);
      $best_product = Product::inRandomOrder()->limit(3)->get();

      return view('product', compact('product', 'best_product', 'title'));
    } catch (\Throwable $th) {
      dd($th);
    }
  }

  public function detail($name)
  {
    try {

      $product = Product::where('product_name', $name)->first();
      $product_img = ProductImage::where('product_id', $product->id)->get();
      $featured = Product::inRandomOrder()->limit(5)->get();

      return view('detail', compact('product', 'featured', 'product_img'));
    } catch (\Throwable $th) {
      dd($th);
    }
  }

  public function category($name)
  {
    try {

      $category = ProductBrand::where('brand_name', $name)->first();
      $product = Product::where('product_brand_id', $category->id)->get();
      $best_product = Product::where('product_brand_id', $category->id)->inRandomOrder()->limit(3)->get();
      $title = $category->brand_name;

      return view('product', compact('product', 'best_product', 'title'));
    } catch (\Throwable $th) {
      dd($th);
    }
  }

  public function search(Request $request)
  {
    try {
      $title = 'Search';
      $product = Product::where("product_name", 'LIKE', '%'.$request->product.'%')->get();
      $best_product = Product::inRandomOrder()->limit(3)->get();

      return view('product', compact('product', 'best_product', 'title'));
    } catch (\Throwable $th) {
      dd($th);
    }
  }
}
