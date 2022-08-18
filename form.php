<!DOCTYPE html>
<html>
  <head>
    <meta chatset="utf -8">
    <title></title>
  </head>
  <boby>

      <?php ?>

      <form action = "form.php" method="get">
        Qual seu Nome: <input type="text" name="nomedeusuario">
        <input type="submit">

      </form>
      <br>
      <?php echo $_GET["nomedeusuario"] ?>

  </body>
</html>
