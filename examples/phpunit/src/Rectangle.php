<?php

declare(strict_types=1);

namespace drupol\shape;

/**
 * Class Rectangle.
 */
class Rectangle extends Shape
{
    /**
     * @var float|int
     */
    private $height;

    /**
     * @var float|int
     */
    private $width;

    /**
     * Rectangle constructor.
     *
     * @param float|int $width
     * @param float|int $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * {@inheritdoc}
     */
    public function area(): float
    {
        return $this->width * $this->height;
    }

    /**
     * {@inheritdoc}
     */
    public function perimeter(): float
    {
        return 2 * $this->width + 2 * $this->height;
    }
}
