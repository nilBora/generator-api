<?php

namespace Jtrw\ApiCreator\Parser;

use Symfony\Component\Yaml\Yaml;

class YamlConfig
{
    private string $file;
    
    public function __construct(string $file)
    {
        $this->file = $file;
    }
    
    public function parse()
    {
        return Yaml::parseFile($this->file);
    }
}
