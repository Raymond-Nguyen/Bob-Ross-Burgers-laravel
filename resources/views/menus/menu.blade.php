@extends('layouts.layout')

@section('head')
<title>
  Menu
</title>
@endsection

@section('content')
@if(session('message'))
<p class="message">{{session('message')}}</p>
@endif
<h1 class="pageTitle">Menu</h1>
<section id="menu">
  <h2 class="center">Menu Items:</h2>
  <ul class="menu-list">
    @foreach($burgers as $burger)
    <li>
      <a href="/menu/{{$burger->id}}">
        <div class="menu-item">

          <div class="image-container">
            <img src="/images/burger/download.png" alt="burgerImage">
          </div>
          <h3>{{$burger->name}}</h3>
          <p>{{$burger->description}}</p>

        </div>
      </a>
    </li>

    @endforeach
  </ul>
  <a href="/menu/create">+ Add New Menu Item</a>
</section>
@endsection
