<?php

include '../verifica_login.php';

?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sua senha foi alterada</title>
</head>
<body class="corpo" style="background-color: #98A381;">
    <div class='conteiner' style="margin:14% 10% 0% 10%; border-radius:10px;">
        <div class='row'>
            <div class='col'>
                <div class="jumbotron Menu">
                    <div class="texto-Menu">
                        <h1 class="display-4 text-center mb-5">Sua senha foi modificada com sucesso</h1>
                        <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                            <div>
                                <a type="button" class="btn btn-success" href="../senha_meus_dados.php">>Voltar para menu</a>
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