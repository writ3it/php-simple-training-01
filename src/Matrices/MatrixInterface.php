<?php

namespace PT01\Matrices;

use PT01\Exceptions\OutOfRangeException;

interface MatrixInterface
{
    public function __construct(MatrixShape $shape);

    /**
     * Get value of i,j cell in matrix.
     * @param int $i row
     * @param int $j column
     * @return float
     */
    public function get(int $i, int $j): float;

    /**
     * Set value of i,j cell in matrix.
     * @param int $i row
     * @param int $j column
     * @param float $value
     * @return MatrixInterface
     */
    public function set(int $i, int $j, float $value): MatrixInterface;

    /**
     * @return array
     */
    public function getShape():MatrixShape;

    /**
     * Converts Matrix to array of array of floats.
     * @return array
     */
    public function toArray(): array;

    /**
     * Returns array of columns coordinates.
     * @return integer[]
     */
    public function getColumnsIndices(): array;

    /**
     * Returns array of rows coordinates.
     * @return integer[]
     */
    public function getRowsIndices(): array;


    /**
     * Sets values by array
     * @param array $data
     * @return MatrixInterface
     * @throws OutOfRangeException
     */
    public function fillWithArray(array $data): MatrixInterface;
}