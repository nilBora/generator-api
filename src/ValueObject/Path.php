<?php

namespace Jtrw\ApiCreator\ValueObject;

class Path
{
    public static function fromArray(array $path): self
    {
        $self = new self();
        
        return $self;
    }
}
