<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Fahrenheit to Celsius, with PHP">
  <meta name="keywords" content="Immaculata, ICD2O">
  <meta name="author" content="Isaaq Simon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (13)/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (13)/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (13)/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io (13)/site.webmanifest">
  <title>Fahrenheit to Celsius Converter</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <div class="converter">
    <h2>Fahrenheit to Celsius</h2>
    <form method="post">
      <label for="fahrenheit">Enter Temperature (°F):</label>
      <input type="number" name="fahrenheit" id="fahrenheit" step="any" placeholder="e.g. 98.6">
      <button type="submit">Convert</button>
    </form>

    <div id="result">
      <?php
        $f = $_POST["fahrenheit"] ?? '';
        $c = is_numeric($f) ? ($f - 32) * 5 / 9 : null;
        echo is_numeric($c)
          ? "Temperature in Celsius: " . round($c, 2) . "°C"
          : ($f !== '' ? "Please enter a valid number." : "");
      ?>
    </div>
  </div>

  <img src="images/FahrenheitandCelsius.png" alt="Temperature">

</body>
</html>