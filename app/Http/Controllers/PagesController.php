<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;


class PagesController extends controller
{
//    public function index(){
//        return view('pages.index');
//    }

    public function getIndex(){
        $products = Product::all();
        return view('pages.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->cart);

        $request->session()->put('cart', $cart);
        return redirect()->route('pages.index');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('pages.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }

    /**
     * @return mixed
     */
    public function getSubscribe($email){
        dd($email);
        //$emails = $_GET['email'];
        $emails = 'Hellor';
        //return view('pages.subscribe', ['email'=> $emails]);
       return json(['name' => 'San Francisco', 'state' => 'CA']);
    }

}