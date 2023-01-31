<?php

namespace Jtrw\ApiCreator\ValueObject;

class Method
{
    private string $name;
    
    private string $limit;
    /**
     * @var Property[]
     */
    private array $properties;
    
    public function __construct(string $name, int $limit, array $properties)
    {
        $this->name = $name;
        $this->limit = $limit;
        $this->properties = static::setProperties($properties);
    }
    
    private static function setProperties(array $properties)
    {
        $vos = [];
        foreach ($properties as $name => $property) {
            $vos[] = new Property($property['type'], $name);
        }
        return $vos;
    }
}
