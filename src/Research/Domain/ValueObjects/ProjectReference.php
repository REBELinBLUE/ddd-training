<?php

namespace BestInvestments\Research\Domain\ValueObjects;

class ProjectReference
{
    /** @var string */
    private $value;

    public function __construct()
    {
        $this->value = chr(mt_rand(65, 90)) . chr(mt_rand(65, 90)) . sprintf('%04d', mt_rand(1, 9999));
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
