<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Página Principal </title>
    <link rel="stylesheet" href="recursos/style.css">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    
    
</head>
<body>

    <!-- Importa a barra superior -->
    <?php include ('nav.php'); ?>



        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3 menu"> 
                    <?php include 'menu.php'; ?>
                </div>

                   

                <div class="col-md-9">
                    
                    <div class="row">

                        <div class="col-md cartao">
                            <h1> Cadastro </h1>
                                <form>

                                    <div class="form-group">
                                        <label> Código do Usuário </label>
                                        <input type="text" class="form-control" placeholder="Seu Código">
                                    </div>

                                    <div class="form-group">
                                        <label> Nome do Usuário </label>
                                        <input type="text" class="form-control" placeholder="Seu Nome">
                                    </div>

                                    <div class="form-group">
                                        <label> CPF </label>
                                        <input type="text" class="form-control" placeholder="Seu CPF">
                                    </div>

                                    <div class="form-group">
                                    <label> Senha </label>
                                <div class="row">
                                    <div class="col-11"> 
                                         <input type="password" class="form-control" placeholder="Senha" id="campoSenha">
                                    </div>
                                    <div class="col-1"> 
                                        <span style="margin: 10px -10px" toggle="#password-field" class="fa fa-fw fa-eye field_icon botaoMostrar"></span>
                                    </div>
                                    
                                   
                                </div>
                                    </div>    



                                        <button type="submit" class="btn btn-dark">Enviar</button>

                                </form>
                        </div>

                        <div class="col-md cartao"> 
                            <h1> Listagem </h1>

                            <table class="table" id="tabela">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Primeiro</th>
                                    <th scope="col">Último</th>
                                    <th scope="col">Nickname</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
        
                </div>

            </div>
            
        </div>
        


    <!-- script -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="recursos/javaScript.js"></script>
    <script>
        $("body").on('click', '.botaoMostrar', function() {

            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#campoSenha");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }

        });
    </script>
</body>
</html>