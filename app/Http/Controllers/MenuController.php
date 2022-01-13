<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;

class MenuController extends Controller
{
  public function index()
  {

    $burgers = Burger::latest()->get();

    return view('menus.menu', ['burgers' => $burgers]);
  }

  public function show($id)
  {
    $burger = Burger::findOrFail($id);

    return view('menus.show', ['burger' => $burger]);
  }

  public function create()
  {
    return view('menus.create');
  }

  public function store()
  {
    $burger = new Burger();

    $burger->name = request('burger-name');
    $burger->description = request('burger-desc');
    $burger->price = request('burger-price');
    $burger->ingredients = request('ingredients');
    $burger->burgerMeat = request('burger-meat');
    $burger->otherIngredients = request('other-ingredients');
    $burger->extraItem = request('extra-item');
    $burger->save();
    return redirect('/menu')->with('message', 'Your burger has been created!');
  }

  public function destroy($id)
  {
    $burger = Burger::findOrFail($id);
    $burger->delete();
    return redirect('/menu')->with('message', 'Your burger has been removed!');
  }
}
