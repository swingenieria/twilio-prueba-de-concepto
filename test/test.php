<?php

require_once __DIR__.'/../src/TwilioSender.php';

$msj = new WhatsAppMensaje("+14155238886", "+15005550006", "Hello, there!");
$sender = new TwilioSender();
$sender->send($msj);