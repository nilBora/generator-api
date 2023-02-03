<?php

namespace Jtrw\ApiCreator\ValueObject;

class RequestType
{
    public const METHOD_GET = "get";
    public const METHOD_POST = "post";
    public const METHOD_DELETE = "delete";
    public const METHOD_PUT = "put";
    
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
