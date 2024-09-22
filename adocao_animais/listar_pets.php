<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações do cabeçalho da página -->
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade -->
    <title>Lista de Pets</title> <!-- Título da página -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Link para o arquivo CSS -->
</head>
<body>

    <!-- Menu de navegação -->
    <nav>
        <ul>
            <li><a href="index.php">Início</a></li> <!-- Link para a página inicial -->
            <li><a href="registrar_pet.php">Registrar Pet</a></li> <!-- Link para registrar pet -->
            <li><a href="listar_pets.php">Ver Pets Disponíveis</a></li> <!-- Link para listar pets -->
        </ul>
    </nav>
    <hr>

    <h1>Lista de Pets Disponíveis para Adoção</h1> <!-- Título da página -->

    <!-- Botão para voltar à página principal -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="html/index.html" class="botao">Voltar à página principal</a> <!-- Link correto para o index.html -->
    </div>
    <?php
    // Inclui a conexão com o banco de dados
    include 'db_config/conexao.php';

    // Consulta todos os pets registrados
    $sql = "SELECT id, nome, tipo_animal, descricao_animal, email, telefone, endereco, imagem_pet FROM pets";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Exibe cada pet registrado
        while ($row = $resultado->fetch_assoc()) {
            echo "<div class='pet-list'>";
            echo "<h2>Nome: " . $row['nome'] . "</h2>"; // Nome do pet
            echo "<p>Tipo de Animal: " . $row['tipo_animal'] . "</p>"; // Tipo de animal
            echo "<p>Descrição: " . $row['descricao_animal'] . "</p>"; // Descrição do pet
            echo "<p>Email do Doador: " . $row['email'] . "</p>"; // Email do doador
            echo "<p>Telefone do Doador: " . $row['telefone'] . "</p>"; // Telefone do doador
            echo "<p>Endereço do Doador: " . $row['endereco'] . "</p>"; // Endereço do doador

            // Exibe a imagem do pet se estiver disponível
            if ($row['imagem_pet']) {
                echo "<img src='" . $row['imagem_pet'] . "' alt='Imagem do Pet'>";
            } else {
                echo "<p>Imagem não disponível.</p>";
            }
            echo "</div>";
        }
    } else {
        echo "<p>Nenhum pet registrado ainda.</p>"; // Caso não haja pets
    }

    $conn->close(); // Fecha a conexão com o banco de dados
    ?>


    <!-- Rodapé do site -->
    <footer>
        <p>&copy; 2024 Sistema de Adoção de Animais</p> <!-- Copyright -->
    </footer>

</body>
</html>
