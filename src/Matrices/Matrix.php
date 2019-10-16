<?php

namespace PT01\Matrices;

use PT01\Exceptions\OutOfRangeException;

/**
 * Class Matrix
 * The matrix data structure
 * @package PT01\Matrices
 */
class Matrix implements MatrixInterface
{
    /**
     * @var MatrixShape
     */
    private $shape;
    /**
     * @var float[][]
     */
    private $data;

    public function __construct(MatrixShape $shape)
    {
        $this->shape = $shape;
        $this->data = static::createEmptyArray($shape);
    }

    private static function createEmptyArray(MatrixShape $shape)
    {
        $emptyColumn = array_fill(0, $shape->getHeight(), 0);
        return array_fill(0, $shape->getWidth(), $emptyColumn); //create columns
    }

    /**
     * Get value of i,j cell in matrix.
     * @param int $i
     * @param int $j
     * @return float
     * @throws OutOfRangeException
     */
    public function get(int $i, int $j): float
    {
        $this->checkCoordinates($i, $j);
        return $this->data[$i][$j];
    }

    /**
     * Throw exception when coords are out of range
     * @param int $i
     * @param int $j
     * @throws OutOfRangeException
     */
    private function checkCoordinates(int $i, int $j)
    {
        if (!$this->shape->isInsideMatrix($i, $j)) {
            throw new OutOfRangeException($i, $j);
        }
    }

    /**
     * Set value of i,j cell in matrix.
     * @param int $i
     * @param int $j
     * @param float $value
     * @return MatrixInterface
     * @throws OutOfRangeException
     */
    public function set(int $i, int $j, float $value): MatrixInterface
    {
        $this->checkCoordinates($i, $j);
        $this->data[$i][$j] = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getShape(): MatrixShape
    {
        return $this->shape;
    }

    /**
     * Converts Matrix to array of array of floats.
     * @return array
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Returns array of columns coordinates.
     * @return integer[]
     */
    public function getColumnsIndices(): array
    {
        return range(0, $this->shape->getWidth()-1, 1);
    }

    /**
     * Returns array of rows coordinates.
     * @return integer[]
     */
    public function getRowsIndices(): array
    {
        return range(0, $this->shape->getHeight()-1, 1);
    }

}