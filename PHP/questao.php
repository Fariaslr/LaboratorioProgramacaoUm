<?Php
    $slide ="";

    echo "Slide 5<br>Questão 1<br>";

    $numeroAleatorio = rand(-20,20);

    if($numeroAleatorio > 10){
        echo "$numeroAleatorio é maior que 10";
    }
    else if($numeroAleatorio == 10){
        echo "$numeroAleatorio é igual a 10";
    } else{
        echo "$numeroAleatorio é menor que 10";
    }

    
    echo "<br><br>Questão 2<br>";  

    if($numeroAleatorio <0){
        echo "$numeroAleatorio valor negativo";
    }
    else if($numeroAleatorio == 0){
        echo "$numeroAleatorio valor é zero";
    } else{
        echo "$numeroAleatorio é positivo";
    }

    echo "<br><br>Questão 3<br>";  
    /*
    for($i = 0; $i <= 3;$i++){
        $array=array();
        array_push($array,rand(0,10));
        echo "<br><br>func<br>"; 
        $printarray=implode($array);
       echo "$printarray";
    }
    echo "<br><br>final<br>"; 
    $arraycal=array_sum($array);
    $printarray=$arraycal/4;
    echo "$printarray";
    */

    $notas = [];
    $somaNotas = 0;

    for($i = 0; $i<= 3;$i++){
        $notas[$i] = rand(0,10);
        $somaNotas = $somaNotas + $notas[$i];
        echo "$notas[$i]<br>";
    }

    $mediaNotas = $somaNotas/4;
    echo "<br>Média das notas -> $mediaNotas<br>";
    if($mediaNotas >= 7){
        echo "Aluno aprovado";
    } else{
        echo "Aluno reprovado";
    }
    
    echo "<br><br> Questão 4<br>";
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="questao4.php">
    <label>Sexo:</label> 
            M<input type="radio" name="SEXO" value="M">
            F<input type="radio" name="SEXO" value="F"> <br>
            <input type="submit" value="enviar"></button>
    </form>

</body>
</html>
