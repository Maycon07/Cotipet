<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações do cabeçalho da página -->
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade -->
    <title>Registrar Pet</title> <!-- Título da página -->
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

    <h1>Registrar Pet</h1> <!-- Título da página -->
 <!-- Botão para voltar à página principal -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="html/index.html" class="botao">Voltar à página principal</a> <!-- Link correto para o index.html -->
    </div>
    <!-- Formulário para registrar um novo pet -->
    <form action="salvar_pet.php" method="POST">
        <label for="nome">Nome do Pet:</label> <!-- Campo para nome do pet -->
        <input type="text" id="nome" name="nome" required> <!-- Campo de entrada obrigatório -->

        <label for="tipo_animal">Tipo de Animal:</label> <!-- Campo para tipo de animal -->
        <input type="text" id="tipo_animal" name="tipo_animal" required> <!-- Campo de entrada obrigatório -->

        <label for="descricao_animal">Descrição do Pet:</label> <!-- Campo para descrição do pet -->
        <textarea id="descricao_animal" name="descricao_animal" required></textarea> <!-- Área de texto obrigatória -->

        <label for="email">Email do Doador:</label> <!-- Campo para email do doador -->
        <input type="email" id="email" name="email" required> <!-- Campo de entrada de email obrigatório -->

        <label for="telefone">Telefone do Doador:</label> <!-- Campo para telefone do doador -->
        <input type="text" id="telefone" name="telefone" required> <!-- Campo de entrada obrigatório -->

        <label for="endereco">Endereço do Doador:</label> <!-- Campo para endereço do doador -->
        <input type="text" id="endereco" name="endereco" required> <!-- Campo de entrada obrigatório -->

        <button type="submit">Registrar</button> <!-- Botão para enviar o formulário -->
    </form>

   

    <!-- Rodapé do site -->
    <footer>
        <p>&copy; 2024 Sistema de Adoção de Animais</p> <!-- Copyright -->
    </footer>

</body>
</html>
