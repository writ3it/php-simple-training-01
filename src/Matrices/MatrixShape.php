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
     * @param int $w
     * @param int $h
     */
    public function __construct(int $w, int $h)
    {
        $this->width = $w;
        $this->height = $h;
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
}