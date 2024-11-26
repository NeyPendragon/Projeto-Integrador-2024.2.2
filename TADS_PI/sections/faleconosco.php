<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


    <title>Fale Conosco</title>
</head>
<body>
  <main class="container ">
      <!-- Header -->
 <section>
  <div class="row p-3 bg-primary text-white">
    <div class="container-fuid">
      <div class="col d-flex justify-content-center">
        <h4> Fale Conosco </h4>
      </div>
    </div>
  </div>
 </section>

 <!-- Nome do usuário -->
<section>
  <div class="container-fluid">
    <div class="row p-4">
      <h5 class="text-primary text-center"> Nome do Usuário </h5>
    </div>
  </div>
</section>

<!-- Título da página -->
<section>
<div class="row">
  <div class="container-fluid">
    <h3 class="text-center text-secondary"> Será um prazer falar com você! </h3>
</div>
</section>


<div class="container">
<!-- Formulário de cadastro -->
<form action="" method="post" class="mt-3">
    
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control border border-info" id="email" name="emailmedico">
    </div>
    <div class="mb-3">
        <label for="tel" class="form-label">Assunto:</label>
        <input type="text" class="form-control border border-info" id="tel" name="telefonemedico">
    </div>
    <div class="mb-3">
    <label class="form-label" for="exampleFormControlTextarea1">Digite seu texto aqui:</label>
    <textarea class="form-control border border-info" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>


    <button type="submit" class="btn btn-primary mt-3 btn-lg">Enviar</button>

</form>
</div><!-- Final da div container -->
<footer class="folga"></footer>
<!-- ****************************************************************************************************  --> 
        <!-- Menu Fixo -->
        <section class="bg-primary-subtle fixed-bottom menu">
        <div class="row">
        <div class="col d-flex flex-column align-items-center">
            <a href="javascript: history.go(-1)" ><span class="material-symbols-outlined md-60">arrow_circle_left</span></a>
            <p> Voltar </p>
        </div>

            <div class="col d-flex flex-column align-items-center">
            <a href="inicio.php" ><span class="material-symbols-outlined md-60">home</span></a>
            <p> Início </p>
            </div>

            <div class="col d-flex flex-column align-items-center">
            <a href="../index.php" ><span class="material-symbols-outlined md-60">tab_move</span></a>
            <p> Sair </p>
            </div>
            
        </div>
        </section>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>