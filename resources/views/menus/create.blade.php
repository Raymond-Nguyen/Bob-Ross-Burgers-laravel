@extends('layouts.layout')

@section('head')
<title>
  Menu - Create New Burger
</title>

<script type="text/javascript" src="{{URL::asset('js/newitem.js')}}"></script>

@endsection

@section('content')
<h1 class="pageTitle">Create New Burger</h1>
<section>
  <h2 class="center">New Burger Form</h2>
  <form action="/menu" method="POST">
    @csrf
    <label for="burger-name">
      <h3>Burger Name</h3>
    </label>
    <input type="text" name="burger-name" id="burger-name" required>
    <br><br>
    <label for="burger-desc">
      <h3>Description of Burger</h3>
    </label>
    <textarea type="text" name="burger-desc" id="burger-desc" required></textarea>
    <br><br>

    <label for="burger-price">
      <h3>Burger Price</h3>
    </label>
    <input type="number" step="any" name="burger-price" id="burger-price" required>
    <br><br>

    <h3>Burger Ingredients</h3>
    <label for="burger-buns">
      <input type="checkbox" name="ingredients[]" id="burger-buns" value="Burger Buns">
      Burger Buns</label>
    <br>
    <label for="lettuce">
      <input type="checkbox" name="ingredients[]" id="lettuce" value="Lettuce">
      Lettuce</label>
    <br>
    <input type="checkbox" name="ingredients[]" id="tomato" value="Tomato"> <label for="tomato">Tomato</label>
    <br>
    <input type="checkbox" name="ingredients[]" id="onions" value="Onions">
    <label for="onions">Onions</label>
    <br>
    <label for="cheese">
      <input type="checkbox" name="ingredients[]" id="cheese" value="Cheese">
      Cheese
    </label>


    <br><br>
    <label for=" burger-meat">
      <h3>Burger Meat</h3>
    </label>

    <select name="burger-meat" id="burger-meat" required>
      <option value="Beef">Beef</option>
      <option value="Pork">Pork</option>
      <option value="Turkey">Turkey</option>
      <option value="Alien">Alien</option>
      <option value="Train">Train</option>
      <option value="Fish">Fish</option>
    </select>
    <br><br>
    <h3>Other Ingredients</h3>
    <label for="ketchup">
      <input type="checkbox" name="other-ingredients[]" id="ketchup" value="Ketchup">
      Ketchup</label><br>
    <label for="mayo"><input type="checkbox" name="other-ingredients[]" id="mayo" value="Mayonnaise">
      Mayonnaise</label><br>
    <label for="eggs">
      <input type="checkbox" name="other-ingredients[]" id="eggs" value="Eggs">
      Eggs</label><br>
    <label for="zombiebrain">
      <input type="checkbox" name="other-ingredients[]" id="zombiebrain" value="Zombie Brain">
      Zombie Brain</label><br>
    <label for="bobrosssecretingredient">
      <input type="checkbox" name="other-ingredients[]" id="bobrosssecretingredient" value="Bob Ross's Secret Ingredient">
      Bob Ross's Secret Ingredient</label>
    <br><br>

    <h3>Other</h3>
    <div id="new-item"></div>
    <p class="addItemMenu" onclick="newItem()">+ Add Other Item</p>

    <br><br>
    <input type="submit" value="Create Burger">
  </form>

</section>
@endsection
