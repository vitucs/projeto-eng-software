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
        <a href="localhost:8000/index.php"><img alt="Logo Netflix" class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Netflix_icon.svg"></a>
        <p class="titulo-topo">Gerenciamento de Funcionários - Netflix</p>
    </header>
    <main class="principal">
        <div class="background">
            <div class="top-background">
                <?php
                $pdo = new PDO('mysql:host=localhost;dbname=proj_engsoftware', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if (isset($_POST['cpf'])) {
                    $sql = $pdo->prepare("DELETE from funcionarios where  cpf = '{$_POST['cpf']}'");
                    $sql->execute();
                    ?> <script>
                        window.location.href = 'sucesso.php';
                    </script> <?php                    
                }
                ?>
                <form id="form1" name="form1" method="post">
                    <br><label class="formulario" for="cpf">CPF para deletar:</label>
                    <input class="botao-formulario" type="text" id="cpf" name="cpf"><br><br>
                    <input class="botao-formulario" type="submit" name="button" id="button" value="Enviar" />
                </form>
            </div>
        </div>
    </main>
    <footer class="rodape">
        <p class="texto-rodape">© 2021 Netflix®, Inc. Todos os direitos reservados.</p>
    </footer>
</body>

</html>