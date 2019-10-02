<?php

declare(strict_types=1);

namespace drupol\shape\Contract;

/**
 * Interface Shape.
 */
interface Shape
{
    /**
     * @return float
     */
    public function area(): float;

    /**
     * @return float
     */
    public function perimeter(): float;
}
