<head>  <link rel="stylesheet" href="css/estilos.css"> <!-- Link para o CSS --></head>
<?php
// Inclui a conexão com o banco de dados
include 'db_config/conexao.php';

// Obtém os dados do formulário
$nome = $_POST['nome'];
$tipo_animal = $_POST['tipo_animal'];
$descricao_animal = $_POST['descricao_animal'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

// Verifica se a conexão com o banco de dados foi estabelecida corretamente
if ($conn) {
    // Insere os dados no banco de dados
    $sql = "INSERT INTO pets (nome, tipo_animal, descricao_animal, email, telefone, endereco) 
            VALUES ('$nome', '$tipo_animal', '$descricao_animal', '$email', '$telefone', '$endereco')";

    if ($conn->query($sql) === TRUE) {
        // Obtém o ID do pet recém-inserido
        $pet_id = $conn->insert_id;
        // Redireciona para a página de adicionar imagem
        header("Location: adicionar_imagem.php?pet_id=$pet_id");
        exit();
    } else {
        echo "Erro ao registrar o pet: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    echo "Erro: Conexão com o banco de dados não foi estabelecida.";
}
?>
