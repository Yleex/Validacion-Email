<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $header= "From: noreply@yourmail.com" . "\r\n";
        $header.= "Reply-to: noreply@yourmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $email= @email($email, $asunto, $msg, $header);
        if ($email) {
            echo "<h4>¡Enviado exitosamente</h4>!";
        }else {
            echo "<h4>¡Email no enviado!</h4>";
        }

    }
}