<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <title>Gerenciamento de Funcionários</title>
</head>


<body>
    <header class="topo">
        <a href="https://www.netflix.com"><img alt="Logo Netflix" class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Netflix_icon.svg"></a>
        <p class="titulo-topo">Gerenciamento de Funcionários - Netflix</p>
    </header>
    <main class="principal">
        <div class="top-background">
            <?php $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if (isset($_POST['name'])) {
                $sql = $pdo->prepare("INSERT INTO usuario values (null, ?, ?)");
                $sql->execute(array($_POST['name'], $_POST['email']));
                ?> <script>window.location.href='sucesso.php';</script> <?php
            }
            ?>
            <form id="form1" name="form1" method="post">
                <br><label for="name">Nome:</label>
                <input type="text" id="name" name="name"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
                <input type="submit" name="button" id="button" value="Enviar" />
            </form>
        </div>
    </main>
    <footer class="rodape">
        <p class="texto-rodape">© 2021 Netflix®, Inc. Todos os direitos reservados.</p>
    </footer>
</body>

</html>