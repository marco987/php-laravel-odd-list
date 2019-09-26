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
    <div class="container">
      @php

        foreach ($numDispari as $numero) {
          echo "<p class='numero'>" . $numero . "</p>";
        }

      @endphp
    </div>
    <footer>
      <h3>Fine progetto</h3>
    </footer>

  </body>
</html>
