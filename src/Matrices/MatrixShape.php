<?php

namespace PT01\Matrices;


class MatrixShape
{
    /**
     * @var int
     */
    private $width;
    /**
     * @var int
     */
    private $height;

    /**
     * MatrixShape constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Returns number of columns
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Returns number of rows
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Check that coordinates are inside matrix
     * @param int $i row
     * @param int $j column
     * @return bool
     */
    public function isInsideMatrix(int $i, int $j)
    {
        return $i >= 0 && $j >= 0 && $i < $this->height && $j < $this->width;
    }
}