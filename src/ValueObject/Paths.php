<?php

namespace Jtrw\ApiCreator\ValueObject;

class Paths
{
    /**
     * @var Path[]
     */
    private array $paths;
    
    public static function fromArray(array $paths): self
    {
        $self = new self();
        
        $self->paths = static::setPaths($paths);
        
        return $self;
    }
    
    private static function setPaths(array $paths)
    {
        $result = [];
        
        foreach ($paths as $path) {
            $result[] = Path::fromArray($path);
        }
        
        return $result;
    }
}
