<?php

include 'verifica_login.php';

?>


<!DOCTYPE html>
<html lang="PT-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PETSHOP-HOME</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/home.css">
</head>

<body>

<?php

include 'cabecalhoCliente.php';

?>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators mb-5">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Icons/cachorro-carrosel.jpg" class="d-block w-100 img-fluid" style="height: 750px;" alt="...">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h5>PetShop</h5>
          <p>Aqui temos o que seu pet precisa, venha nos chamar via whatsszap<br>
             para agendar nosso serviços</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Icons/cat-carrosel.jpg" class="d-block w-100" alt="..." style="height: 750px;">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h5>Teste</h5>
          <p>test test test tset test test test</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="d-flex my-5" style="height: 600px;">
    <div class="">
      <h2 class="ms-5">Sobre Nós</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum laborum dicta ab necessitatibus, ex at eaque
      consequatur vero itaque quod.</p>
    </div>

    <img src="Icons/dog-sobre.jpg" class="w-100" style=" border-radius:10px;" alt="">
  </div>


  <div class="w-100"
    style="background-image: url(Icons/gato-serviço.png); background-repeat: no-repeat; background-size: 25% 100%; background-color:#E17F26;">
    <h2 class="mx-auto pt-5 fs-1" style="width: 430px;">A nova onda do seu Pet</h2>

    <div class="d-flex mx-auto" style="width: 50%; margin:15% auto 10px auto;">
      <div>
        <div class="text-center">
          <p class="fs-2">Banho e Tosa</p>
        </div>
        <div class="border bg-white rounded-circle mx-4 imagem-background-serv-1" style="width:250px; height:250px;  background-image: url(Icons/Serviço1.png);">
        </div>
      </div>

      <div>
        <div class="text-center">
          <p class="fs-2">Spa</p>
        </div>
        <div class="border bg-white rounded-circle mx-4 imagem-background-serv-2" style="width:250px; height:250px;    background-image: url(Icons/Serviço2.png); ">
        </div>
      </div>


      <div>
        <div class="text-center">
          <p class="fs-2">Taxi Dog</p>
        </div>
        <div class="bg-white rounded-circle mx-4 imagem-background-serv-3" style="width:250px; height:250px;  background-image: url(Icons/Serviço3.png);">
        </div>
      </div>


      <div class="img-patinha-position">
        <img src="Icons/patinha-serv.png" alt="">
      </div>
    </div>

    <div class="mx-auto py-5 d-flex serv-button" style="width: 121px;">
      <a class="fs-3" style="color:black; text-decoration: none; transition: 1s;" href="">Ver Mais</a>
    </div>
  </div>

<?php

include 'rodape.php';

?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</html>