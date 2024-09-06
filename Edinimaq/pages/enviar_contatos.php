<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Enviar email ou salvar no banco de dados
    // Você pode usar mail() para enviar emails ou conectar a um banco de dados

    echo "<p>Obrigado, $name! Sua mensagem foi enviada com sucesso.</p>";
}
?>
