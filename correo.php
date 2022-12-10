<?php
if (isset($_POST['enviar'])) {
    if(!empty($_POST['email'])&& !empty($_POST['mensaje'])){
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/". phpversion();
        $mail=@mail($email, $mensaje, $header);
    }

}
?>
