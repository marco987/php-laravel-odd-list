<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ODD</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>

    <header>
      <h1>Numeri Dispari fra 10 e 100</h1>
    </header>
    @php
      foreach ($numDispari as $numero) {
        echo $numero . " - ";
      }
    @endphp
    <footer>
      <h3>Fine progetto</h3>
    </footer>

  </body>
</html>
