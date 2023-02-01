<?php

namespace Jtrw\ApiCreator\Factory;

use Jtrw\ApiCreator\ValueObject\GetMethod;
use Jtrw\ApiCreator\ValueObject\MethodInterface;
use Jtrw\ApiCreator\ValueObject\PostMethod;

class RequestMethodFactory
{
    public static function factory(string $name): MethodInterface
    {
        switch ($name) {
            case 'get':
                return new GetMethod();
            case 'post':
                return new PostMethod();
        }
    }
}
