<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    // declarar as variáveis e o metódo GET com o nome do objeto"v".
    $valor = $_GET["v"];
    // receber a raiz quadrada
    $rq = sqrt ($valor);
    echo "A raiz de $valor é igual a ". number_format($rq, 2);
    //echo "O valor enviado foi $valor";
        
    ?>
    <!--criar um link fora do php -->
    <!-- criar um link para "voltar" -->
    <a href="01ex.html">Voltar</a>
</div>
</body>
</html>
 