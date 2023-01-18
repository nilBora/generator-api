<?php

require_once __DIR__."/../vendor/autoload.php";

$config = new \Jtrw\ApiCreator\Parser\YamlConfig(__DIR__.'/../users.yaml');
print_r($config->parse());
