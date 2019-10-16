<?php

namespace PT01\Tests\Matrices;

use PHPUnit\Framework\TestCase;
use PT01\Exceptions\OutOfRangeException;
use PT01\Matrices\Matrix;
use PT01\Matrices\MatrixShape;

/**
 * Class MatrixTest
 * TODO: reduce asserts per test
 * @package PT01\Tests\Matrices
 */
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

    /**
     * @throws \PT01\Exceptions\OutOfRangeException
     */
    public function testSetValue()
    {
        $A = new Matrix(new MatrixShape(3, 3));
        $A->set(0, 0, 0.5);
        $A->set(1, 1, 0.5);
        $A->set(2, 2, 0.5);
        foreach ($A->getColumnsIndices() as $i) {
            foreach ($A->getRowsIndices() as $j) {
                if ($i == $j) {
                    $this->assertEquals(0.5, $A->get($i, $j), "cell [{$i},{$j}] =/= 0.5");
                } else {
                    $this->assertEquals(0, $A->get($i, $j), "cell [{$i},{$j}] =/= 0");
                }
            }
        }
    }

    /**
     * @throws OutOfRangeException
     */
    public function testOutOfRangeException_get()
    {
        $this->expectException(OutOfRangeException::class);
        $A = new Matrix(new MatrixShape(3, 3));
        $A->get(2, 3);
    }

    /**
     * @throws OutOfRangeException
     */
    public function testOutOfRangeException_set()
    {
        $this->expectException(OutOfRangeException::class);
        $A = new Matrix(new MatrixShape(3, 3));
        $A->set(2, 3, 1);
    }
}