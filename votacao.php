<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="./css/votacao.css" rel="stylesheet">
    <title>Votação</title>
</head>
<body>
    <div class="d-flex flex-column justify-content-between bg-light" id="sidenav">
        <a href="./index.php" class="d-block p-3 link-dark text-decoration-none" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
            <img class="mb-4" src="./assets/logo.png" alt="logo" id="logo">
        </a>
        <div class="dropdown border-top">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" id="profile">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <form action="./salvar.php" method="POST"><li><input type="submit" value="Logout" class="dropdown-item" name="encerrar"></li></form>
            </ul>
        </div>
    </div>
    <div class="align">
        <main class="d-flex flex-column" id="form-container">
            <div class="form-group" id="title">
                <span class="badge badge-primary" id="badge">Tecnologia</span>
                <h2>Eleição do nome do programador mais famoso da área da computação</h2>
                <h5>Responda com calma, <span id="span"><?php session_start(); echo $_SESSION['usuario']; ?></span></h5>
            </div>
            <form action="./salvar.php" method="POST">
                <div class="form-group">
                    <select class="form-select" name="voto">
                        <option selected disabled>Selecione uma opção de voto</option>
                        <option value="1">Ada Lovelace</option>
                        <option value="2">Edsger Dijkstra</option>
                        <option value="3">Grace Murray Hopper</option>
                        <option value="4">Tim Berners-Lee</option>
                        <option value="5">Em branco</option>
                    </select>
                </div>
                <div class="form-group" id="submit-group">
                    <input type="submit" class="btn btn-primary" value="Enviar" name="submit" id="submit">
                    <input type="submit" class="btn btn-secundary" value="Pular para os resultados" name="pular" id="pular">
                </div>
                <?php
                    if (isset($_SESSION['erro']))
                        echo "<div class='alert alert-danger alert-dismissable'>
                                <a href='votacao.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>$_SESSION[erro]</strong> 
                            </div>";
                ?>
            </form>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>