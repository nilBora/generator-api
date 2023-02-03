<?php

namespace Jtrw\ApiCreator\ValueObject;

class GetMethod implements MethodInterface
{
    private string $limit;
    /**
     * @var Property[]
     */
    private array $properties;
    
    private array $response;
    
    public function __construct(int $limit, array $properties, array $response)
    {
        $this->limit = $limit;
        $this->properties = static::setProperties($properties);
        $this->response = $response;
    }
}
