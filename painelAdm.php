<?php
include 'verifica_login.php';
// session_start();
// print_r($_SESSION);exit;


?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body class="corpo">
    <div class='conteiner' style="margin:14% 10% 0% 10%; border-radius:10px;">
        <div class='row'>
            <div class='col'>
                <div class="jumbotron Menu">
                    <div class="texto-Menu">
                        <h1 class="display-4 text-center mb-5">Opções do administrativo</h1>
                        <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                            <div>
                                <a type="button" class="btn text-decoration-none" href="criarAdm.php">>Crie um novo Adm</a>
                            </div>
                            <div>
                                <a type="button" class="btn text-decoration-none" href="servico_pet_adm/tabelaServico.php">>Gerencie os Serviços</a>
                            </div>
                            <div>
                                <a type="button" class="btn text-decoration-none" href="servico_pet_adm/servico_horario/tabelaHorario.php">>Gerencie os horarios</a>
                            </div>
                            <div>
                                <a type="button" class="btn text-decoration-none" href="logout.php">>Logout</a>
                            </div>  
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>