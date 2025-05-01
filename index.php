<!DOCTYPE html>
<!-- ICS2O-Unit5-02-PHP-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Day and age for muesem, with JS" />
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
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Day and age for muesem, with JS</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./movie_ratings.jpg" alt="Picture of the first Hello World" />
      </div>
      <div class="page-content">Enter in your age</div>
      <br />
      <form action="./answer.php" method="get">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="A" id="length-a" required />
            <label class="mdl-textfield__label" for="demo-input">Enter length A of the triangle (mm): </label>
            <span class="mdl-textfield__error">Input is not a number</span>
          </div>
          <br />
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" name="B" id="length-b" required />
            <label class="mdl-textfield__label" for="demo-input">Enter length A of the triangle (mm):</label>
            <span class="mdl-textfield__error">Input is not a number</span>
          </div>
          </br>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" name="C" id="length-c" required />
            <label class="mdl-textfield__label" for="demo-input">Enter length A of the triangle (mm):</label>
            <span class="mdl-textfield__error">Input is not a number</span>
          </div>
          </br>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            onclick="myButtonClicked()" type="button">
            Find type of triangle!
          </button>
        </form>
        <div class="page-content-answer">
          <div id="answer"></div>
        </div>
    </main>
  </div>
</body>