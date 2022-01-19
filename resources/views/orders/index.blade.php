@extends('layouts/layout')

@section('head')
<title>
  Order
</title>
@endsection

@section('content')
@if(session('message'))
<p class="message">{{session('message')}}</p>
@endif
<h1 class="pageTitle">Order</h1>
<section>
  <h2 class="center">Orders:</h2>
  <ul class="order-list">
    @foreach($burgers as $burger)
    <li>

      <div class="order-item">

        <div class="image-container">
          <img src="/images/burger/download.png" alt="burgerImage">
        </div>
        <h3>{{$burger->name}}</h3>
        <p>{{$burger->description}}</p>
        <form action="/order" method="POST">
          @csrf
          <div class="hide">
            <input type="text" value="{{$burger->name}}" name="name" id="name">
            <input type="text" value="{{$burger->description}}" name="description" id="description">
            <input type="text" value="{{$burger->price}}" name="price" id="price">


            @if($burger->ingredients)
            <input type="text" value="{{implode(", ", $burger->ingredients)}}" name="ingredients" id="ingredients">
            @endif
            <input type="text" value="{{$burger->burgerMeat}}" name="burgerMeat" id="burgerMeat">
            @if($burger->otherIngredients)
            <input type="text" value="{{implode(", ", $burger->otherIngredients)}}" name="otherIngredients"
              id="otherIngredients">
            @endif
            @if ($burger->extraItem)
            <input type="text" value="{{implode(", ", $burger->extraItem)}}" name="extraItem" id="extraItem">
            @endif

          </div>
          <input type="submit" value="Add To Cart">
        </form>
      </div>

    </li>

    @endforeach
  </ul>

  <div class="cart">
    <div class="tab">
      <div></div>
      <p>Checkout</p>
    </div>
    <a href="/cart">
      <div class="cart-container">
        <img src="/images/add-cart.png" alt="cartimage">

      </div>
    </a>
  </div>
</section>














































































@endsection