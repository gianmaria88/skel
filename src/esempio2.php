<?php

require_once __DIR__ . '/../vendor/autoload.php';

Use Symfony\Component\Yaml\Yaml;

$cfg = Yaml::parseFile(__DIR . '../config.yml');

$var = $cfg['param1'];