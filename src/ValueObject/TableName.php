<?php

namespace Jtrw\ApiCreator\ValueObject;

class TableName
{
    private string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    public function toNative(): string
    {
        return $this->name;
    }
}
