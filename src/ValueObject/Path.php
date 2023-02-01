<?php

namespace Jtrw\ApiCreator\ValueObject;

class Path
{
    /**
     * @var Method[]
     */
    private array $methods;
    
    public static function fromArray(array $path): self
    {
        $self = new self();
        $self->methods = static::setMethods($path['methods']);
        return $self;
    }
    
    /**
     * @param array $methods
     * @return Method[]
     */
    private static function setMethods(array $methods): array
    {
        $methodsVOs = [];
        foreach ($methods as $name => $method) {
            
            $methodsVOs[] = new Method($name, (int) $method['limit'], $method['properties']);
        }
        return $methodsVOs;
    }
}
