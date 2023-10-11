<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculando Médias</h1>

    <?php
    $notasAluno1 = array(9.5, 8.7, 7.8);
    $notasAluno2 = array(6.5, 5.2, 4.9);
    $notasAluno3 = array(7.0, 8.5, 6.7);

    function calcularMedia($notas){
        $soma = 0;
        $quantidade = count($notas);
        for($i=0; $i < $quantidade; $i++){
            $soma = $soma + $notas[$i];  
        }
        if($quantidade > 0){
            return $soma / $quantidade;
        }else{
            return 0;
        }
    }

    $mediaAluno1 = calcularMedia($notasAluno1);
    $mediaAluno2 = calcularMedia($notasAluno2);
    $mediaAluno3 = calcularMedia($notasAluno3);

   $mediaAluno1 = number_format($mediaAluno1, 2,',','.');
   $mediaAluno2 = number_format($mediaAluno2, 2,',','.');
   $mediaAluno3 = number_format($mediaAluno3, 2,',','.');

   echo "<br> Média do ALuno 1: $mediaAluno1";
   echo "<br> Média do ALuno 2: $mediaAluno2";
   echo "<br> Média do ALuno 3: $mediaAluno3";

   $alunos = array(
    "Blair" => $mediaAluno1,
    "Serenna" => $mediaAluno2,
    "Georgina" => $mediaAluno3


   );

   foreach($alunos as $aluno => $media){
      if($media >= 6){
        echo "<br>$aluno foi aprovado";
      }else{
        echo "<br> $aluno foi reprovado";
      }
   }

    ?>

</body>
</html>