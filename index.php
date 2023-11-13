<?php

use Notification\Email;

require __DIR__ . "/lib_ext/autoload.php";

$email = new Email;
// $email->sendEmail("Assunto de Teste", "<p>Esse e  um <b>E-mail</b> de Teste</p>", "lael_santos@hotmail.com", "Lael Dev", "lael_santos@hotmail.com", "Lael");
$email->sendEmail("Assunto de teste","<p>Esse e um E-mail de <b>Teste</b>!</p>","lael_santos@hotmail.com","Lael Santos","lael_santos@hotmail.com","LALE");

var_dump($email);
