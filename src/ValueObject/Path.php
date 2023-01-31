<?php

namespace Jtrw\ApiCreator\ValueObject;

class Path
{
    private array $methods;
    
    public static function fromArray(array $path): self
    {
        $self = new self();
        $self->methods = static::setMethods($path['methods']);
        return $self;
    }
    
    private static function setMethods(array $methods)
    {
        $methodsVOs = [];
        foreach ($methods as $name => $method) {
            $methodsVOs[] = new Method($name, $method['limit'], $method['properties']);
        }
    }
}
