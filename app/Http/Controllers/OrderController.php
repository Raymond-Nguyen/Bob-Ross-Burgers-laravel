<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;
use App\Models\Order;

class OrderController extends Controller
{
  public function index()
  {

    $burgers = Burger::latest()->orderBy('id', 'desc')->get();

    return view('orders.index', ['burgers' => $burgers]);
  }
  public function store()
  {
    $order = new Order();

    $order->name = request('name');
    $order->description = request('description');
    $order->price = request('price');
    $order->ingredients = request('ingredients');
    $order->burgerMeat = request('burgerMeat');
    $order->otherIngredients = request('otherIngredients');
    $order->extraItem = request('extraItem');
    $order->save();

    return redirect('order')->with('message', 'The item has been added to your cart!');
  }
}