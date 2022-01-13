@extends('layouts.layout')

@section('head')
<title>
  Menu - {{$burger->name}}
</title>
@endsection

<?php

function normalizeText($string)
{

  $string = strtolower($string);
  $string = ucfirst($string);

  return $string;
}


?>

@section('content')
<h1 class="pageTitle">Menu - {{$burger->name}}</h1>
<section id="menu">
  <div class="center menu-page-item">
    <h2>Item:</h2>
    <img src="/images/burger/download.png" alt="burgerImage">
    <br><br>
    <h2>Name - {{$burger->name}}</h2><br />
    <h2>Price - ${{number_format($burger->price, 2)}}</h2><br>
    <p>{{$burger->description}}</p>
    <h3>Ingredients Include:</h3>

    <ul class="ingredients-list">
      <h4>Base Ingredients</h4>
      @if($burger->ingredients)
      @foreach($burger->ingredients as $ingredient)
      <li>
        {{$ingredient}}
      </li>
      @endforeach
      @else
      <p>None</p>
      @endif
      <br>
      <h4>Burger Meat</h4>
      <li>
        {{$burger->burgerMeat}}
      </li>
      <br><br>
      <h4>Other Ingredients</h4>
      @if($burger->otherIngredients)
      @foreach($burger->otherIngredients as $otherIngredient)
      <li>{{$otherIngredient}}</li>
      @endforeach
      @else
      <p>None</p>
      @endif
      <br><br>
      <h4>Extra Items</h4>
      @if($burger->extraItem)
      @foreach($burger->extraItem as $extraI)
      <li>{{normalizeText($extraI)}}</li>
      @endforeach
      @else
      <p>None</p>
      @endif
    </ul>
  </div>

  <form action="/menu/{{$burger->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Remove Menu Item</button>
  </form>

</section>
@endsection
