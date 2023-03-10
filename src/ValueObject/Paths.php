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
        
        foreach ($paths as $pathName => $pathData) {
            $result[] = new Path($pathName, $pathData);
        }
        
        return $result;
    }
    
    /**
     * @return Path[]
     */
    public function toNative(): array
    {
        return $this->paths;
    }
}
