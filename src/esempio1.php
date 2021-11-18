<?php

require_once __DIR__ . '/../vendor/autoload.php';

Use Monolog\Logger;
Use Monolog\Hander\StreamHandler;

$log = new Logger('log');
$log->pushHandler(new StreamHandler('./warning.log', Logger::WARNING));

$log->warning('Attenzione');
$log->error('Errore');