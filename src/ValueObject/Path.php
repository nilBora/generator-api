<?php

namespace Jtrw\ApiCreator\ValueObject;

use Jtrw\ApiCreator\Factory\RequestMethodFactory;

class Path
{
    private string $name;
    
    /**
     * @var Method[]
     */
    private array $methods;
    
    public function __construct(string $name, array $pathData)
    {
        $this->name = $name;
        $this->methods = $this->setMethods($pathData['methods']);
    }
    
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @param array $methods
     * @return Method[]
     */
    private function setMethods(array $methods): array
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
