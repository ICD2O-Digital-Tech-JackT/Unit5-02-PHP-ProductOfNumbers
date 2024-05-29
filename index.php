<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <title>Number multiplier PHP</title>
    <link rel="stylesheet" href="/css/style.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
  </head>
  <body>

    <?php
      echo "<h1>Number multiplier loop</h1>";
      echo "<br>";
      echo "<img src='/images/multiplyFav.png' style='width:200px'>";
      echo "<br>";
    ?>
    <br>
    <form action="./results.php" method="post" target="results">
      <label for="lblAge">Number 1:</label>
      <input type="number" id="1" placeholder="number 1" name="1" step=""><br><br>
      <label for="lblAge">Number 2:</label>
      <input type="number" id="2" placeholder="number 2" name="2"><br><br>
      <input type="submit" value="Display numbers">
    </form>
    <?php
    echo "<br>"
    ?>
      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
        Result:
      </iframe>
  </body>
</html>