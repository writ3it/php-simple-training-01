<?php

namespace PT01\Tests\Matrices;

use PHPUnit\Framework\TestCase;
use PT01\Matrices\Matrix;
use PT01\Matrices\MatrixShape;

class MatrixTest extends TestCase
{
    public function testCreating()
    {
        $A = new Matrix(new MatrixShape(3, 4));
        $this->assertEquals($A->getColumnsIndices(), [0, 1, 2], "ColumnsIndices doesn't match");
        $this->assertEquals($A->getRowsIndices(), [0, 1, 2, 3], "RowsIndices doesn't match");
    }

    /**
     * @throws \PT01\Exceptions\OutOfRangeException
     */
    public function testZeroMatrix()
    {
        $A = new Matrix(new MatrixShape(3, 4));
        foreach ($A->getColumnsIndices() as $i) {
            foreach ($A->getRowsIndices() as $j) {
                $this->assertEquals(0, $A->get($i, $j), "cell [{$i},{$j}] =/= 0");
            }
        }
    }
}