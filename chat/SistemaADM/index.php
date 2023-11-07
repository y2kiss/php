<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="recursos/style.css">
    <link rel="stylesheet" href="recursos/particulas.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
</head>
<body>
        <div class="painel">
            <h1>Login:</h1>
    <form>
        <div class="form-group">
            <label>CPF</label>
            <input name="cpf" type="text" class="form-control"  placeholder="Seu CPF" required>
            
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input name="senha" type="password" class="form-control" placeholder="Senha" required>
        </div>
        
            <a href="principal.php"> IR </a>

        <button type="submit" class="botao">Enviar</button>
        <button type="reset" class="botao">Limpar</button>
        </form> 


        


        </div>

    <!-- particles.js container --> <div id="particles-js"></div> 
<!-- stats - count particles --> <div class="count-particles"> <span class="js-count-particles">--</span> particles </div> 
<!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="recursos/particulas.js"></script>
</body>
</html>