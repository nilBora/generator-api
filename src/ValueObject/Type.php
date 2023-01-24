<?php

namespace Jtrw\ApiCreator\ValueObject;

class Type
{
    private const METHOD_GET = "get";
    private const METHOD_POST = "post";
    private const METHOD_DELETE = "delete";
    private const METHOD_PUT = "put";
    
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
