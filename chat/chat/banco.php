<?php 
    //Fazer conexão do backend com o banco de dados
    $nomeServidor = "sql301.infinityfree.com"; //localhost
    $username = "if0_35249661";          //root
    $senha = "OKImw5qqeigYJBC";                 //""
    $nomeBanco = "if0_35249661_rede_banco";   //rede_banco

    //mysqli - driver responsável por conectar com o banco
    $conexao = new mysqli($nomeServidor, $username, $senha, $nomeBanco);

    //se a conexão falhar
    if($conexao -> connect_error){
        die("Conexão com o banco de dados falhou!". $conexao -> connect_error);
    }

    ?>