<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Cart;

class CartController extends Controller
{
    private $product,$cartProduct;
    public  function index(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id'        => $id,
            'name'      => $this->product->name,
            'qty'       => $request->qty,
            'price'     => $this->product->selling_price,
            'options'   => [
                'image'  => $this->product->image,
                'price1'  => $this->product->regular_price,

            ]]);
        return redirect('/cart/show');
    }
    public function show()
    {
        $this->cartProduct = Cart::content();

        return view('website.cart.index', ['products' => $this->cartProduct]);
    }
    public function update( Request $request, $rowId)
    {
        Cart::update($rowId, $request->qty);
        return back()->with('message', 'Cart product info update successfully.');
    }
    public function remove($rowId)
    {
        Cart::remove($rowId);
        return back()->with('message', 'Cart product info remove successfully.');
    }
}
