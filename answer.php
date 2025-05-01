<!DOCTYPE html>
<!-- ICS2O-Unit5-02-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Positive or Negative #, in JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Day and age for muesem, with JS</title>
</head>

<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Generated Number</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content" style="padding: 20px;">
        <?php
        $a = $_GET['A'];
        $b = $_GET['B'];
        $c = $_GET['C'];

        // Law3 of Cosines
        $angleA = rad2deg(acos(($b ** 2 + $c ** 2 - $a ** 2) / (2 * $b * $c)));
        $angleB = rad2deg(acos(($c ** 2 + $a ** 2 - $b ** 2) / (2 * $c * $a)));
        $angleC = rad2deg(acos(($a ** 2 + $b ** 2 - $c ** 2) / (2 * $a * $b)));

        // round and sum angles
        $sumOfAngles = round($angleA, 2) + round($angleB, 2) + round($angleC, 2);

        // determine the type of triangle
        if (round($sumOfAngles) == 180) {
          echo "<h4>The angles of your triangle have a sum of 180°.</h4>";
          if ($a == $b && $b == $c) {
            echo "Your triangle type is <strong>equilateral</strong>.";
          } elseif ($a == $b || $b == $c || $c == $a) {
            echo "Your triangle type is <strong>isosceles</strong>.";
          } else {
            echo "Your triangle type is <strong>scalene</strong>.";
          }
        } else {
          echo "<h4>The angles do NOT add up to 180°, so it's not a triangle. Try again.</h4>";
        }
        ?>
        <br />
        <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" href="./index.php">Try Again</a>
      </div>
    </main>
  </div>
</body>

</html>