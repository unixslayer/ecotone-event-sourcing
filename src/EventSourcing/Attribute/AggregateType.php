<?php

declare(strict_types=1);

namespace Ecotone\EventSourcing\Attribute;

use Ecotone\Messaging\Support\Assert;

#[\Attribute(\Attribute::TARGET_CLASS)]
final class AggregateType
{
    private string $name;

    public function __construct(string $name)
    {
        Assert::notNullAndEmpty($name, "Aggregate type can't be empty");

        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
