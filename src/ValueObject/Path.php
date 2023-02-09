<?php

namespace Jtrw\ApiCreator\ValueObject;

use Jtrw\ApiCreator\Factory\RequestMethodFactory;

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
            $factory = new RequestMethodFactory($name);
            $methodsVOs[] = $factory->create($method);
        }
        return $methodsVOs;
    }
    
    /**
     * @return Method[]
     */
    public function getMethods(): array
    {
        return $this->methods;
    }
}
