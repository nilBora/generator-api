<?php

require_once __DIR__."/../vendor/autoload.php";

use Jtrw\ApiCreator\Service\EndpointService;
use Jtrw\ApiCreator\Parser\YamlConfig;
use Symfony\Component\HttpFoundation\Request;

$config = new YamlConfig(__DIR__.'/../users.yaml');
$endpoint = new EndpointService($config->parse(), Request::createFromGlobals());
$endpoint->start();
