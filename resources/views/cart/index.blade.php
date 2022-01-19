@extends('layouts/layout')

@section('head')
<title>
  Your Cart
</title>
@endsection

<?php
$total = 0;
?>

@section('content')
@if(session('message'))
<p class="message">{{session('message')}}</p>
@endif

<h1 class="pageTitle">Cart</h1>
<section>
  <h2 class="center">Cart:</h2>
  <ul class="cart-list">
    @if($order)
    @foreach($order as $orderItem)
    <li>
      <div>
        <h3>{{$orderItem->name}}</h3>
        <p>{{$orderItem->description}}</p>
      </div>
      <div>
        <h3 class="align-right">Price:</h3>
        <p>${{number_format($orderItem->price, 2)}}</p>
      </div>
      <div class="remove">
        <form action="/cart/{{$orderItem->id}}" method="POST">
          @csrf
          @method("DELETE")
          <button>Remove Order</button>
        </form>
      </div>
    </li>
    <?php
    $total += $orderItem->price;
    ?>
    @endforeach
    @endif
  </ul>
  <div>
    <h3 class="align-right">Total:</h3>
    <p class="align-right">${{number_format($total, 2)}}</p>
  </div>
</section>

@endsection
