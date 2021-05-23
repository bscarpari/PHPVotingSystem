<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="./css/signin.css" rel="stylesheet">
  <title>Tela de Login</title>
</head>
<body class="text-center">
  <main class="form-signin">
    <form action="login.php" method="POST">
      <img class="mb-4" src="./assets/logo.png" alt="logo" id="logo">
      <h1 class="h3 mb-3 fw-normal">Por favor, logue-se!</h1>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Digite seu usuário" name="usuario">
        <label for="usuario">Nome de usuário</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="exemplo@exemplo.com" name="email">
        <label for="floatingInput">E-mail</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha">
        <label for="floatingPassword">Senha</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      <?php
      session_start();
      if (isset($_SESSION['erro']))
        echo "<div class='alert alert-danger alert-dismissable' id='aviso'>
                <a href='index.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>$_SESSION[erro]</strong> 
              </div>";
      session_unset();
      ?>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>