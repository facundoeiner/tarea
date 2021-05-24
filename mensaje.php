<?php

    $mensaje;
    $asunto="comentario";
    $mail="facundo11.mendez@gmail.com";
     
    if (isset($_POST['bt1'])){

            if (!empty( $_POST['mensaje'])){
                $mensaje=$_POST['mensaje'];
                $header="from: facundo11.mendez@gmail.com"."\r\n";
                $header.="Reply-to: meli_vandevelde@hotmail.com "."\r\n";
                $header.="X-Mailer: PHP/". phpversion();
                mail($mail,$asunto,$mensaje,$header);
                if ($meil){
                    echo "<h4>mensaje enviado</h4>";
                }
            }
    }