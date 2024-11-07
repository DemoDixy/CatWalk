<?php include "header.php"; ?>
<?php
session_start(); // Inicia a sessão

// Inclui a conexão com o banco de dados
include 'conexaoBD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $matriculaUsuario = $_POST['matriculaUsuario'];
    $nomeUsuario = $_POST['nomeUsuario'];
    $cursoUsuario = $_POST['cursoUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = password_hash($_POST['senhaUsuario'], PASSWORD_DEFAULT); // Hash da senha

    // Verifica se a senha e a confirmação de senha coincidem
    if ($_POST['senhaUsuario'] !== $_POST['confirmarSenhaUsuario']) {
        die("As senhas não coincidem.");
    }

    // Verifica se já existe um usuário com o mesmo email
    $query = "SELECT * FROM usuarios WHERE emailUsuario = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $emailUsuario); // Corrigido para usar $emailUsuario
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Se o email já estiver cadastrado, exibe uma mensagem de erro
        die("Email já cadastrado. Tente um diferente.");
    }

    // Processa o upload da foto
    $foto = $_FILES['fotoUsuario']['name'];
    $caminhoFoto = "img/" . basename($foto);

    // Move a foto para o diretório de uploads
    if (!move_uploaded_file($_FILES['fotoUsuario']['tmp_name'], $caminhoFoto)) {
        die("Erro ao enviar a foto.");
    }

    // Insere os dados na tabela de usuários
    $query = "INSERT INTO usuarios (matriculaUsuario, nomeUsuario, cursoUsuario, emailUsuario, senhaUsuario, fotoUsuario) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssss", $matriculaUsuario, $nomeUsuario, $cursoUsuario, $emailUsuario, $senhaUsuario, $caminhoFoto);

    if ($stmt->execute()) {
        // Cadastro bem-sucedido
        $_SESSION['msg'] = "Usuário cadastrado com sucesso!";
        header("Location: index.php"); // Redireciona para a página inicial
        exit();
    } else {
        die("Erro ao cadastrar: " . $stmt->error);
    }
}
?>

<?php include "footer.php"; ?>