<?php
    echo "1º Utilizando uma estrutura de repetição monte um array numérico.<br><br>";

    $tamanhoVetor = 5;
    $vetorNumerico = array();
    $somaArray = 0;

    for ($i = 1; $i < $tamanhoVetor; $i++){
        $vetorNumerico[$i] = rand(0,10);
        $somaArray += $vetorNumerico[$i];
        echo "$i º valor do vetor numérico -> $vetorNumerico[$i]<br>";
    }

    echo "<br>2º Calcule a média de 5 números contidos em um array.<br>";
    $mediaVetor = $somaArray / count($vetorNumerico);
    echo "<br>A média do vetor acima, com $tamanhoVetor números é de $mediaVetor";

    echo "<br><br>3º Melhore o exercício que gerava seis dezenas aleatórias da Mega Sena agora utilizando arrays 
    para não deixar gerar uma dezena repetida. – Dica: use rand(1,60) para gerar números aleatórios<br><br>";
    $tamanhoVetor = 6;
    for($i = 0; $i < $tamanhoVetor; $i++){
        $vetorNumerico[$i] = rand(0,60);
        echo "$vetorNumerico[$i] ";
    }

    echo "<br><br>4º Crie um array multi-dimensional (matriz) e use print_r() para exibir a estrutura na tela.<br><br>";

    $jogo = [
        ["ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11],
        ["ID"=>2, "NOME"=>"José", "PONTOS"=>4],
        ["ID"=>3, "NOME"=>"Zéca", "PONTOS"=>22]
    ];

    print_r($jogo);

    echo "<br><br>5º Crie um array para armazenar os nomes dos meses do ano e utilize a função date(“w”) para exibir o nome
    do mês atual. – Dica: a função date(“w”) retorna um número inteiro de 0 a 6, 0 (para domingo) até 6 (para
    sábado).<br><br>";

    $mesesDoAno = array(
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    );
    
    foreach ($mesesDoAno as $mes) 
        echo $mes . "<br>";

    echo date("w") . "º dia da semana";

    echo "<br><br>6º Crie um programa que entre com os dados de altura e sexo de 10 pessoas. Imprima na tela quantas pessoas
    são do sexo masculino e quantas pessoas são do sexo feminino. Mostre também qual é a maior altura e se
    essa altura é de um homem ou uma mulher.<br>";

    $altura = [175, 160, 180, 155, 165, 170, 162, 185, 175, 160];
    $sexo = ['M', 'F', 'M', 'F', 'F', 'M', 'F', 'M', 'M', 'F'];
    
    $totalMasculino = array_count_values($sexo)['M'] ?? 0;
    $totalFeminino = array_count_values($sexo)['F'] ?? 0;

    echo "<br>Quantidade de pessoas do sexo masculino: $totalMasculino\n";
    echo "<br>Quantidade de pessoas do sexo feminino: $totalFeminino\n";

    $indiceMaiorAltura = array_search(max($altura), $altura);
    $sexoMaiorAltura = $sexo[$indiceMaiorAltura];

    echo "<br>A maior altura é: " . max($altura) . " cm<br>";
    echo "Essa altura pertence a uma pessoa do sexo ";

    if ($sexoMaiorAltura == 'M') {
        echo "masculino.\n";
    } elseif ($sexoMaiorAltura == 'F') {
        echo "feminino.\n";
    } else {
        echo "indefinido.\n";
    }

    echo "<br><br>7º Crie um programa que contenha um array com várias idades de pessoas. Exiba quantas pessoas são maior
    de idade (18 anos) e quantas são menores.";

    $idades = [22, 16, 25, 30, 17, 19, 21, 15, 28, 32];

    $maioresDeIdade = 0;
    $menoresDeIdade = 0;

    foreach ($idades as $idade) {
        if ($idade >= 18) {
            $maioresDeIdade++;
        } else {
            $menoresDeIdade++;
        }
    }

    echo "<br>Quantidade de pessoas maiores de idade: $maioresDeIdade\n";
    echo "<br>Quantidade de pessoas menores de idade: $menoresDeIdade\n";
?>
