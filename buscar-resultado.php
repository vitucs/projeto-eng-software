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
                <?php
                $pdo = new PDO('mysql:host=localhost;dbname=proj_engsoftware', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if (isset($_POST['nome'])) {
                    $sql = $pdo->prepare("SELECT * FROM funcionarios where nome LIKE '%{$_POST['nome']}%'");
                    $sql->execute();
                    $fetchUsuario = $sql->fetchAll();
                ?> 
                <div class="campo-form">
                    <table class="tabela">
                        <thead>
                            <tr style="background-color: black;">
                                <th class="tabela">Nome</th>
                                <th class="tabela">Email</th>
                                <th class="tabela">CPF</th>
                                <th class="tabela">Cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($fetchUsuario as $key => $value) {

                                echo "<tr>";
                                echo "<td class='tabela'>" . $value['nome'] . "</td>";
                                echo "<td class='tabela'>" . $value['email'] . "</td>";
                                echo "<td class='tabela'>" . $value['cpf'] . "</td>";
                                echo "<td class='tabela'>" . $value['cargo'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                    <?php
                }
                    ?>
            </div>
    </main>
    <footer class="rodape">
        <p class="texto-rodape">© 2021 Netflix®, Inc. Todos os direitos reservados.</p>
    </footer>
</body>

</html>