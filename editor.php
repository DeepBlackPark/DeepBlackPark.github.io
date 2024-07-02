<!DOCTYPE html>
<html>
  <head>
    <title> TEXT EDITOR </title>
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
  </head>
  <body>
    <py-script>
      I = Element("TxtI")
      O = Element("TxtO")

      def save():
        O.element.innerText = "DeepBlackPark.github.io/editor.php?v={}".format(I.value)
      
    </py-script>
    <h1> TEXT EDITOR </h1>
    <h2> WARNING : It's Indev. </h2>
    <?php
      $vValue = isset($_GET['v']) ? htmlspecialchars($_GET['v']) : '';
    ?>
    <input id="TxtI" value="<?php echo $vValue; ?>">
    <button pys-onClick="save"> save </button>
    <p id="TxtO"></p>
  </body>
</html>
