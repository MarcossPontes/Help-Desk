<?php

    echo '<h1><br>Switch Case + Funcoes<br><br></h1>';

    function realizarOperacao($id, $valor1, $valor2) {
        $id = $id;
        $v1 = $valor1;
        $v2 = $valor2; 
        $resultado = null;

        switch($id){
            case 1:
                $resultado = $v1 + $v2;
                break;
            case 2:
                $resultado = $v1 - $v2;
                break;
            case 3:
                $resultado = $v1 * $v2;
                break;
            case 4:
                $resultado = $v1 / $v2;
                break;
            default:
                echo 'Opcao Invalida!!!';
                break;
        }

        return $resultado;
    }

    function mostrarResultado ($id, $valor1, $valor2) {
        $identificador = $id;
        $v1 = $valor1;
        $v2 = $valor2;
        
        $result = realizarOperacao($identificador, $v1, $v2);
        

        echo "O resultado e $result";
    }

    $identificador = 3;
    $primeiro = 100; 
    $segundo = 123;

    mostrarResultado($identificador, $primeiro, $segundo);

    echo '<br><br><br>______________________________________________________________________________________________<br><br><br>';

    echo '<h1>Strings</h1><br><br>';

    $string = 'Oi, eu tenho 2,49 reais';

    echo $string;
    echo '<br>';
    echo strtolower($string);//coloca tudo em minusculo
    echo '<br>';
    echo strtoupper($string);//coloca tudo em maiusculo
    echo '<br>';
    echo strlen($string);//conta todos caracteres(inclui espaços)
    echo '<br>';
    echo strtoupper(str_replace(',', '.', $string));//troca um trexo da string
    echo '<br>';
    echo substr($string, 13, 10);

    echo '<br><br><br>______________________________________________________________________________________________<br><br><br>';

    echo '<h1>Array</h1><br><br>';

    $lista_frutas = array('banana', 'uva', 'maca', 'pera', 8, 'melancia', 'morango');
    $lista_frutas[] = 3.23;
    $lista_frutas[] = true;

    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<br><br>';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';



?>