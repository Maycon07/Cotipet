<!DOCTYPE html>
<html lang="pt-br"> <!-- Define o idioma da página como português do Brasil -->
<head>
    <!-- Configurações do cabeçalho da página -->
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 para suportar caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Garante que a página seja responsiva -->
    <title>Adicionar Imagem ao Pet</title> <!-- Título da aba da página -->
    <link rel="stylesheet" href="css/estilos.css"> <!-- Link para o arquivo CSS externo com estilos da página -->
</head>
<body>

    <!-- Menu de navegação -->
    <nav>
        <ul>
            <li><a href="index.php">Início</a></li> <!-- Link para a página inicial -->
            <li><a href="registrar_pet.php">Registrar Pet</a></li> <!-- Link para a página de registro de pet -->
            <li><a href="listar_pets.php">Ver Pets Disponíveis</a></li> <!-- Link para a página que lista os pets disponíveis -->
        </ul>
    </nav>
    <hr> <!-- Linha horizontal para separar o menu do restante do conteúdo -->

    <h1>Adicionar Imagem ao Pet</h1> <!-- Título principal da página -->
  <!-- Botão para voltar à página principal -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="html/index.html" class="botao">Voltar à página principal</a> <!-- Link para retornar à página principal -->
    </div>
    <?php
    // Obtém o ID do pet da URL
    $pet_id = isset($_GET['pet_id']) ? $_GET['pet_id'] : null; 
    // Verifica se o ID do pet foi passado via URL (GET). Se não, atribui null.
    
    if (!$pet_id) {
        // Verifica se o ID do pet não foi fornecido
        echo "ID do pet não fornecido!"; 
        // Exibe uma mensagem de erro se o ID do pet não estiver presente
        exit; 
        // Interrompe a execução do script se o ID não foi fornecido
    }
    ?>

    <!-- Formulário para enviar uma imagem para o pet -->
    <form action="salvar_imagem.php" method="POST" enctype="multipart/form-data">
        <!-- O formulário usa o método POST e permite o upload de arquivos (enctype="multipart/form-data") -->
        <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>"> 
        <!-- Campo oculto que armazena o ID do pet a ser associado com a imagem -->

        <label for="imagem_pet">Imagem do Pet:</label> <!-- Rótulo para o campo de upload de imagem -->
        <input type="file" id="imagem_pet" name="imagem_pet" accept="image/*" required> 
        <!-- Campo para seleção de arquivo, limitando o upload a arquivos de imagem (image/*) e tornando obrigatório (required) -->
        
        <button type="submit">Salvar Imagem</button> <!-- Botão para enviar o formulário e salvar a imagem -->
    </form>

  

    <!-- Rodapé do site -->
    <footer>
        <p>&copy; 2024 Sistema de Adoção de Animais</p> <!-- Informação de direitos autorais no rodapé -->
    </footer>

</body>
</html>
