<?php

      // funci9ns to send email for few users
      function  enviarMail( $para , $sujeto , $message )
      {
      // Set the mail headers into a variables
      $cabezeras = "MIME-Version: 1.0\r\n";
      $cabezeras .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $cabezeras .= "From: " . $sujeto . " <" . $para . ">\r\n";
      // $cabezeras .= 'Reply-To: '.$from."\r\n" . 'X-Mailer: PHP/' . phpversion();
      $cabezeras .= "X-Priority: 1\r\n";
      $cabezeras .= "X-MSMail-Priority: High\r\n\r\n";
      // Send the email and confirm
        if( mail($para, $sujeto, $message, $cabezeras) )
        {
           return true;
        } else {
           return false;;
        }
      }
      // fin de la funcione     

   ?>