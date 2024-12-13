<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : 'Não informado';
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $dataNascimento = htmlspecialchars($_POST['data-nascimento']);
    $genero = htmlspecialchars($_POST['genero']);

    $interesses = isset($_POST['interesses']) ? array_map('htmlspecialchars', $_POST['interesses']) : [];
    $feiticos = isset($_POST['feiticos']) ? array_map('htmlspecialchars', $_POST['feiticos']) : [];

    $casa = htmlspecialchars($_POST['casa']);
    $trem = htmlspecialchars($_POST['trem']);
    $nomeVoldemort = htmlspecialchars($_POST['voce-sabe-quem']);
    $horarioPreferido = htmlspecialchars($_POST['horario-preferido']);

    // $arquivo = $_FILES['foto'];
    // $mensagemArquivo = "Nenhum arquivo enviado ou erro no envio.";
    // $diretorioUpload = 'uploads/';

    // if (!is_dir($diretorioUpload)) {
    //     mkdir($diretorioUpload, 0777, true);
    // }

    // if ($arquivo['error'] == UPLOAD_ERR_OK) {
    //     $nomeArquivo = basename($arquivo['name']);
    //     $caminhoArquivo = $diretorioUpload . $nomeArquivo;

    //     if (move_uploaded_file($arquivo['tmp_name'], $caminhoArquivo)) {
    //         $mensagemArquivo = "Arquivo enviado com sucesso: $caminhoArquivo";
    //     } else {
    //         $mensagemArquivo = "Erro ao enviar o arquivo.";
    //     }
    // }
} else {
    echo "<p style='color: red;'>Método inválido. Por favor, envie o formulário corretamente.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header> 
        <h1>Dados recebidos:</h1>
    </header>
    <main>
        <h2>Informações enviadas:</h2>
        <div classe="exibir">
        <ul>
            <li><strong>Nome:</strong> <?php echo $nome; ?></li>
            <li><strong>E-mail:</strong> <?php echo $email; ?></li>
            <li><strong>Telefone:</strong> <?php echo $telefone; ?></li>
            <li><strong>Data de Nascimento:</strong> <?php echo $dataNascimento; ?></li>
            <li><strong>Gênero:</strong> <?php echo $genero; ?></li>
            <li><strong>Casa de Hogwarts:</strong> <?php echo $casa; ?></li>
            <li><strong>Número do trem:</strong> <?php echo $trem; ?></li>
            <li><strong>Nome verdadeiro de Voldemort:</strong> <?php echo $nomeVoldemort; ?></li>
            <li><strong>Horário Preferido:</strong> <?php echo $horarioPreferido; ?></li>
            <li><strong>Feitiços Favoritos:</strong> <?php echo implode(", ", $feiticos); ?></li>
            <li><strong>Filmes Preferidos:</strong> <?php echo implode(", ", $interesses); ?></li>
        </ul>
</div>
        <a href="index.html">Voltar ao formulário</a>
    </main>
    <footer>
        <p>IFRN Campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Obrigado por se cadastrar</p>
    </footer>
</body>
</html>
