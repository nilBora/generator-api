<?php

namespace Jtrw\ApiCreator\Factory;

use Jtrw\ApiCreator\ValueObject\GetMethod;
use Jtrw\ApiCreator\ValueObject\MethodInterface;
use Jtrw\ApiCreator\ValueObject\PostMethod;
use Jtrw\ApiCreator\ValueObject\RequestType;

class RequestMethodFactory
{
    private string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    public function create(array $method): MethodInterface
    {
        switch ($this->name) {
            case RequestType::METHOD_GET:
                return $this->createGetMethod($method['limit'] ?? 0, $method['properties'] ?? [], $method['response'] ?? []);
            case RequestType::METHOD_POST:
                return $this->createPostMethod();
        }
    }
    
    public function createGetMethod(int $limit, array $properties, array $response): MethodInterface
    {
        return new GetMethod($limit, $properties, $response);
    }
    
    public function createPostMethod(): MethodInterface
    {
        return new PostMethod();
    }
}
