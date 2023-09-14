<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="painel">
        <div class="cabecalho">
            <h1>Definição de Cookie</h1> 
            <a href="index.html" class="botao"> Fazer Nova Postagem </a>
        </div>

    <div class="conteudo">

            <?php      
            
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $nome = $_POST["usuario"];
                        setcookie("nome", $nome, time() + 86400 * 30, "/");

                        echo "Coolie de nome usuário definido com sucesso. <br>";
                        echo "Nome Usuário: $nome";
                }else{
                    echo "Erro: Requisição Inválida";
                }
            ?>

        <form action="salvarcookie.php" method="post">
            <label> Digite o nome de Usuário: </label>
            <input type="text" id="usuario" name="usuario">

            <input type="submit" value="Definir Cookie" class="enviar">
        </form>
        
    </div>
    <div class="rodape"></div>
    </div>
</body>
</html>