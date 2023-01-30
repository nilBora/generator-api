<?php

namespace Jtrw\ApiCreator\Parser;

use Jtrw\ApiCreator\Model\ConfigModel;
use Symfony\Component\Yaml\Yaml;

class YamlConfig
{
    private string $file;
    
    public function __construct(string $file)
    {
        $this->file = $file;
    }
    
    public function parse(): ConfigModel
    {
        return ConfigModel::fromArray(Yaml::parseFile($this->file));
    }
}
