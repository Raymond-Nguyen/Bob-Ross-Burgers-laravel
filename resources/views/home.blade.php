<!-- Layout for each page, contains navbar and footer stuff -->
@extends('layouts.layout')

<!-- Title on tab name -->
@section('head')
<title>
  Home
</title>
@endsection

<!-- Where we put in our content -->
@section('content')

<h1 class="pageTitle">Bob Ross Burgers</h1>

<section id="homeContent">
  <p class="center">Welcome to Bob Ross Burgers' website! You may go to the "Order" tab to choose an order, or if you're
    unsure, you can go to menu to view our menu.</p>
  <br>
  <ul class="homeButtons">
    <li><a href="/menu">
        <h2>Menu</h2>
      </a></li>
    <li><a href="/order">
        <h2>Order</h2>
      </a></li>
    <li><a href="/about">
        <h2>About</h2>
      </a></li>
    <li><a href="/contact">
        <h2>Contact</h2>
      </a></li>
  </ul>
</section>

@endsection
