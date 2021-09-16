<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory:ital,wght@0,100;1,300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/7/75/Netflix_icon.svg" />
    <link rel="stylesheet" href="reset.css">
    <title>Gerenciamento de Funcionários</title>
</head>

<body>
    <header class="topo">
        <a href="./index.php"><img alt="Logo Netflix" class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Netflix_icon.svg"></a>

        <a class="titulo-topo" href="./contratar.php">Contratar Funcionário</a>
        <a class="titulo-topo" href="./buscar.php">Buscar Funcionário</a>
        <a class="titulo-topo" href="./demitir.php">Demitir Funcionário</a>

    </header>
    <main class="principal">
        <div class="background">
            <form id="form1" name="form1" method="post" action="./buscar-resultado.php">
                <div class="campo-form">
                    <label class="formulario" for="nome">Nome para buscar:</label>
                    <input class="botao-formulario-input" type="text" id="nome" name="nome" required>
                </div>
                <input class="botao-formulario" type="submit" name="button" id="button" value="Enviar" />
            </form>
        </div>
    </main>
    <footer class="rodape">
        <p class="texto-rodape">© 2021 Netflix®, Inc. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
