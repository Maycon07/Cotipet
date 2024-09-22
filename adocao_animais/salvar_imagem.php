
<head>  <link rel="stylesheet" href="css/estilos.css"> <!-- Link para o CSS --></head>
<nav>
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="registrar_pet.php">Registrar Pet</a></li>
        <li><a href="listar_pets.php">Ver Pets Disponíveis</a></li>
    </ul>
</nav>
<hr>

<?php
// Inclui a conexão com o banco de dados
include 'db_config/conexao.php';

// Obtém o ID do pet
$pet_id = $_POST['pet_id'];

// Verifica se a imagem foi enviada
if (isset($_FILES['imagem_pet']) && $_FILES['imagem_pet']['error'] === UPLOAD_ERR_OK) {
    $imagem = $_FILES['imagem_pet'];
    
    // Define o diretório onde as imagens serão armazenadas
    $diretorio_imagens = 'uploads/';
    
    // Garante que o diretório de upload existe
    if (!is_dir($diretorio_imagens)) {
        mkdir($diretorio_imagens, 0777, true);
    }

    // Gera um nome único para a imagem
    $nome_imagem = uniqid() . '-' . basename($imagem['name']);
    $caminho_imagem = $diretorio_imagens . $nome_imagem;

    // Move a imagem para o diretório final
    if (move_uploaded_file($imagem['tmp_name'], $caminho_imagem)) {
        echo "Imagem enviada com sucesso!";
        
        // Atualiza o registro no banco de dados com o caminho da imagem
        $sql = "UPDATE pets SET imagem_pet='$caminho_imagem' WHERE id='$pet_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Imagem do pet atualizada com sucesso!";
        } else {
            echo "Erro ao atualizar o registro do pet: " . $conn->error;
        }
    } else {
        echo "Erro ao enviar a imagem.";
    }
} else {
    echo "Nenhuma imagem foi enviada.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
