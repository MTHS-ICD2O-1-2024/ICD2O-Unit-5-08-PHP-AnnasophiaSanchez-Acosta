<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Dividing with while loops, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Annasophia" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Dividing with while loops, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script defer src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Dividing with while loops, in PHP</span>
      </div>
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title"> </span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/divide.png" alt="Long Division with labels" />
      </div>
      <form action="answer.php" method="GET">
        <p>Enter dividend:</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" name="dividend" id="dividend" />
          <label class="mdl-textfield__label" for="dividend">Number...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <p>Enter divisor:</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" name="divisor" id="divisor" />
          <label class="mdl-textfield__label" for="divisor">Number...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Calculate
        </button>
      </form>
    </main>
  </div>
</body>

</html>