<!DOCTYPE html>
<html>
  <head>
    <meta chatset="utf -8">
    <title></title>
  </head>
  <boby>

      <?php
          $nome = "Jose";
          $idade = 35;

          echo"<h1>Site do Walter</h1>",
          "<hr>",
          "<p> Esse e meu site</p>",
          "<hr>",
          "<br>",
          "O nome dele e $nome<br>",
          "Ele tem $idade anos de idade<br>",
          "Ele realmente gosta do nome $nome<br>",
          "Mas ele não gosta de ter $idade anos<br>";

          echo strtoupper($nome),
          "<br>";
          echo strtolower($nome),
          "<br>";
          echo "Quantos letras tem o nome ? ";
          echo strlen($nome),
          "<br>";
          echo "Qual a primeira letra do nome ? ";
          echo $nome[0],
          "<br>";
          $nome[0] = "R";
          echo "Altere a primeira letra para R",
          "<br>";
          echo "Exiba o novo nome ";
          echo ($nome),
          "<br>";
          echo "Altere o nome e exiba: ";
          echo str_replace("Rose", "Walter", $nome),
          "<br>";
          echo "Exiba a segunda e terceira letra do nome: ";
          echo substr($nome, 1, 2),
          "<br>";
          echo "exiba 2 elevado a 4: ";
          echo pow (2,4),
          "<br>";
          echo "exiba raiz quadrada de 144: ";
          echo sqrt(144),
          "<br>";
          echo "Exiba qual o menor numero, 2 ou 10: ";
          echo min(2,10),
          "<br>";
          echo "Exiba qual o maior numero, 2 ou 10: ";
          echo max(2,10),
          "<br>";
          echo "Arredonde o numero decimal 3,2: ";
          echo round(3.2),
          "<br>";
          echo "Arredonde para cima o numero decimal 3,2: ";
          echo ceil(3.3),
          "<br>";
          echo "Arredonde para baixo o numero decimal 3,8: ";
          echo floor(3.8);


      ?>

      <form action = "form.php" method="get">
        Qual seu Nome: <input type="text" name="nomedeusuario">
        <input type="submit">

      </form>
      <br>
      <?php echo $_GET["nomedeusuario"] ?>

  </body>
</html>
