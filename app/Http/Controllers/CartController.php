<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CartController extends Controller
{
  public function index()
  {
    $order = Order::latest()->orderBy('id', 'desc')->get();
    return view('cart.index', ['order' => $order]);
  }
  public function destroy($id)
  {
    $order = Order::findOrFail($id);
    $order->delete();
    return redirect('/cart')->with('message', 'The order has been removed!');
  }
}