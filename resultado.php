<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="./css/resultado.css" rel="stylesheet">
    <title>Resultados</title>
</head>
<body class="text-center">
    <div class="d-flex flex-column justify-content-between bg-light" id="sidenav">
        <a href="./index.php" class="d-block p-3 link-dark text-decoration-none" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
            <img class="mb-4" src="./assets/logo.png" alt="logo" id="logo">
        </a>
        <div class="dropdown border-top">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" id="profile">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <form action="./salvar.php" method="POST">
                    <li><input type="submit" value="Logout" class="dropdown-item" name="encerrar"></li>
                </form>
            </ul>
        </div>
    </div>
    <div class="align">
        <?php include_once 'table-result.php'?><br>
        <button class="btn btn-primary"><a class="btn btn-primary" href="./votacao.php" role="button">Voltar</a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>