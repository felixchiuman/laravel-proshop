<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ProductController extends Controller
{
    function index()
    {
        $product = Product::all();
        return view('product', compact('product'));
    }
    function detail($id)
    {
        $product = Product::find($id);
        return view('detail', compact('product'));
    }
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search', compact('data'));
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    function cart()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')->where('cart.user_id', $userId)->select('products.*','cart.id as cart_id')->get();
        return view('cartlist', ['products' => $products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cart');
    }
    function order()
    {
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')->where('cart.user_id', $userId)->sum('products.price');
        return view('order', ['total' => $total]);
    }
    function placeorder(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allcart = Cart::where('user_id', $userId)->get();
        foreach($allcart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $req->payment;
            $order->payment_status = 'success';
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/payment-success')->with('success', 'Pembayaran Berhasil');
    }
    function myOrders()
    {
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')->where('orders.user_id', $userId)
        ->get();
        return view('myorder', ['orders' => $orders]);
    }
}
