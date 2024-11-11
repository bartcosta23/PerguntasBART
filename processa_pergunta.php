<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $pergunta = $_POST['pergunta'];

    $to = "bjlca@iscte-iul.pt"; // Seu email para receber as perguntas
    $subject = "Nova Pergunta sobre Trabalho";
    $message = "Nome: $nome\nEmail: $email\nPergunta: $pergunta";
    $headers = "From: webmaster@example.com"; // Configure o email de envio

    // Enviar a pergunta para o seu email
    mail($to, $subject, $message, $headers);

    // Resposta automática para o utilizador
    $resposta_subject = "Recebemos a sua Pergunta";
    $resposta_message = "Olá $nome,\n\nRecebemos a sua pergunta e em breve enviaremos uma resposta.\n\nObrigado!";
    mail($email, $resposta_subject, $resposta_message, $headers);
    
    echo "Pergunta enviada com sucesso! Verifique o seu email para a confirmação.";
}
