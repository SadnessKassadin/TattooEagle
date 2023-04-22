<?php
    $nome = $_POST['wNome'];
    $snome = $_POST['wSnome'];
    $email = $_POST['wEmail'];
    $telefone = $_POST['wTel'];
    $description = $_POST['wDescription'];

    $sendmail = "cauan162@gmail.com";
    $destmail = $sendmail;
    $assunto = "Novo agendamento";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $nome <$email>';

    $enviaremail = mail($destmail, $assunto, $arquivo, $headers);
    if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
    } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
    }

?>