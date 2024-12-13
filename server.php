<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dados Recebidos</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header>

        <h1>Dados Recebidos</h1>

        <nav>
        <a href="index.html">Início</a>
        <a href="server.php">Exibir Dados</a>
        <a href="desenvolvedores.html">Desenvolvedores</a>
        </nav>

    </header>

    <main>

        <h2>Informações Enviadas</h2>

        <ul>

            <li><strong>Nome:</strong> <?php echo htmlspecialchars($_POST['nome']); ?></li>

            <li><strong>E-mail:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>

            <li><strong>Senha:</strong> <?php echo htmlspecialchars($_POST['senha']); ?></li>

            <li><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($_POST['data-nascimento']); ?></li>

            <li><strong>Telefone:</strong> <?php echo htmlspecialchars($_POST['telefone']); ?></li>

            <li><strong>Gênero:</strong> <?php echo htmlspecialchars($_POST['genero']); ?></li>

        </ul>

    </main>

    <footer>

        <p>IFRN Campus Santa Cruz</p>

        <p>Trabalho de Autoria Web</p>

        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>

        <p>Integrantes: Clara Santana, Dávylla Kauany, Tálisson</p>

    </footer>

</body>

</html>