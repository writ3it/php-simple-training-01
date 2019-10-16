<?php
/**
 * Created by PhpStorm.
 * User: writ3it
 * Date: 16.10.19
 * Time: 23:00
 */

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
     * @param int $i
     * @param int $j
     * @return bool
     */
    public function isInsideMatrix(int $i, int $j)
    {
        return $i>=0 && $j>=0 && $i<$this->width && $j<$this->height;
    }
}