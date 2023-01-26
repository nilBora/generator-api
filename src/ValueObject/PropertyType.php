<?php

namespace Jtrw\ApiCreator\ValueObject;

class PropertyType
{
    public const TYPE_INT = "integer";
    public const TYPE_STRING = "string";
    
    private string $type;
    
    public function __construct(string $type)
    {
        $this->type = $type;
    }
    
    public function toNative(): string
    {
        return $this->type;
    }
}
