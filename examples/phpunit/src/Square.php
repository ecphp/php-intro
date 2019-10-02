<?php

declare(strict_types=1);

namespace drupol\shape;

/**
 * Class Square.
 */
class Square extends Rectangle
{
    /**
     * Square constructor.
     *
     * @param float|int $width
     */
    public function __construct($width)
    {
        parent::__construct($width, $width);
    }
}
