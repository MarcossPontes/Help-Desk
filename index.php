<html>

<head>
    <meta charset="utf-8">
    <title>Primeiro Passos em PHP</title>
</head>

<body>

    <?php
    /*
        Utilizando comentarios em bloco
        Nao tenho muito o que dizer sobre esta primeira pagina teste
        Vou utilizar este arquivo para treinar pull e push no github desktop
    */


    echo "<h1>Ola Mundo!</h1>";//Iniciando o codigo com Hello World
    $numero1 = 10;
    $numero2 = 4;

    $soma = $numero1 + $numero2;//soma as variaveis
    $subtracao = $numero1 - $numero2;//subtrai
    $multiplicacao = $numero1 * $numero2;//multiplica
    $divisao = $numero1 / $numero2;//divide

    echo $soma . "<br>";
    echo $subtracao . "<br>";
    echo $multiplicacao . "<br>";
    echo $divisao."<br>";//devolve o resultado que esta salvo nas variaveis em questao

    echo 'Comando echo'."<br>";
    print 'Comando print';

    ?>

</body>

</html>