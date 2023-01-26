<?php

namespace Jtrw\ApiCreator\ValueObject;

class Property
{
    private PropertyType $type;
    private string $name;
    
    public function __construct(string $type, string $name)
    {
        $this->type = new PropertyType($type);
        $this->name = $name;
    }
}
