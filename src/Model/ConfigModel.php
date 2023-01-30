<?php

namespace Jtrw\ApiCreator\Model;

use Jtrw\ApiCreator\ValueObject\Paths;
use Jtrw\ApiCreator\ValueObject\TableName;

class ConfigModel
{
    private TableName $tableName;
    private Paths $paths;
    
    public static function fromArray(array $fields): self
    {
        $self = new self();
        $self->tableName = new TableName($fields['table'] ?? '');
        $self->paths = Paths::fromArray($fields['paths']);
        return $self;
    }
}
