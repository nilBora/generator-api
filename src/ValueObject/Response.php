<?php

namespace Jtrw\ApiCreator\ValueObject;

class Response
{
    private string $type;
    private int $code;
    
    public function __construct(string $type, int $code)
    {
        $this->type = $type;
        $this->code = $code;
    }
}
