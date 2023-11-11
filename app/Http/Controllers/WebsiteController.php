<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    private $products, $product;
    public function index()
    {
        $this->products = Product::where('trending_status', 1)->get(['id', 'name','image', 'regular_price', 'selling_price', 'unit_id']);

        return view('website.home.index', [
            'products'      => $this->products,
        ]);
    }
    public function categoryProduct($id)
    {
        $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('website.category.index', ['products' =>  $this->products]);
    }
    public function productDetail($id)
    {
        $this->product = Product::find($id);
        return view('website.product.index', ['product' => $this->product]);
    }
    public function shop()
    {
        $this->products = Product::get(['id', 'name','image', 'regular_price', 'selling_price','short_description', 'long_description', 'unit_id']);
        return view('website.product.shop', ['products' => $this->products,]);
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function blog()
    {
        return view('website.blog');
    }
}
