<?php
/**
 * Created by PhpStorm.
 * User: writ3it
 * Date: 17.10.19
 * Time: 00:04
 */

namespace PT01\Operations;


use PT01\Matrices\Matrix;
use PT01\Matrices\MatrixInterface;
use PT01\Matrices\MatrixShape;

class Multiplication implements MatrixResultOperationInterface
{

    public function execute(MatrixInterface $A, MatrixInterface $B): MatrixInterface
    {
        $result = $this->getEmptyMatrixResult($A);
        foreach ($A->getRowsIndices() as $i) {
            foreach ($B->getColumnsIndices() as $j) {
                $value = 0;
                foreach ($B->getRowsIndices() as $k) {
                    $a = $A->get($i, $k);
                    $b = $B->get($k, $j);
                    $value += $a * $b;
                }
                $result->set($i, $j, $value);
            }
        }
        return $result;
    }

    private function getEmptyMatrixResult(MatrixInterface $A): MatrixInterface
    {
        $size = min($A->getShape()->getWidth(), $A->getShape()->getHeight());
        return new Matrix(new MatrixShape($size, $size));
    }
}