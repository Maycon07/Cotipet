<?php
$servername = "localhost";  // Nome do servidor (geralmente "localhost" quando se usa um servidor local como XAMPP ou WAMP)
$username = "root";         // Nome de usuário do banco de dados (padrão no XAMPP é "root")
$password = "";             // Senha do banco de dados (padrão no XAMPP é vazio)
$dbname = "adocao_animais";  // Nome do banco de dados que você deseja se conectar

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname); 
// A função 'new mysqli' é usada para criar uma nova conexão ao banco de dados MySQL 
// utilizando o servidor, nome de usuário, senha e nome do banco de dados fornecidos.

// Verificar a conexão
if ($conn->connect_error) {
    // Verifica se houve algum erro na tentativa de conexão
    die("Falha na conexão: " . $conn->connect_error); 
    // Se houver um erro, exibe a mensagem de falha e encerra o script.
} 
?>
