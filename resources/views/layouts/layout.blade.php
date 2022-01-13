<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  @yield('head')


  <!-- Styles -->
  <link href="/css/main.css" rel="stylesheet">

</head>

<header>
  <nav>
    <ul>
      <li><a href="/home">Home</a></li>
      <li><a href="/menu">Menu</a></li>
      <li><a href="/order">Order</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </nav>
</header>

<body>
  <div class="content">
    @yield('content')
  </div>
</body>

</html>
