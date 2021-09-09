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
        <a href="localhost:8000"><img alt="Logo Netflix" class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Netflix_icon.svg"></a>
        <p class="titulo-topo">Gerenciamento de Funcionários - Netflix</p>
    </header>
    <main class="principal">
        <div class="background">
            <div class="top-background">
                <form id="form1" name="form1" method="post">
                    <select class="formulario" name="opcao">
                        <option value="1">Contratar Funcionário</option>
                        <option value="2">Buscar Funcionários</option>
                        <option value="3">Demitir Funcionário</option>
                    </select><input class="botao-formulario" type="submit" name="button" id="button" value="Selecionar" />
                </form>
                <?php
                $valor = isset($_POST['opcao']) ? $valor = $_POST['opcao'] : 0;
                switch ($valor) {
                    case "1":
                ?> <script>
                            window.location.href = 'contratar.php';
                        </script> <?php
                                    break;
                                case "2":
                                    ?> <script>
                            window.location.href = 'buscar.php';
                        </script> <?php
                                    break;
                                case "3":
                                    ?> <script>
                            window.location.href = 'demitir.php';
                        </script> <?php
                                    break;
                            }
                                    ?>
            </div>
        </div>
    </main>
    <footer class="rodape">
        <p class="texto-rodape">© 2021 Netflix®, Inc. Todos os direitos reservados.</p>
    </footer>
</body>

</html>