<?php

namespace Jtrw\ApiCreator\ValueObject;

class Path
{
    public static function fromArray(array $path): static
    {
        $self = new self();
        
        return $self;
    }
}
