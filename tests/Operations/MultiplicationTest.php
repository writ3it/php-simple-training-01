<?php

namespace PT01\Tests\Operations;


use PHPUnit\Framework\TestCase;
use PT01\Matrices\Matrix;
use PT01\Matrices\MatrixInterface;
use PT01\Matrices\MatrixShape;
use PT01\Operations\MatrixResultOperationInterface;
use PT01\Operations\Multiplication;

/**
 * Class MultiplicationTest
 * TODO: write invalid shapes multiplication test
 * @package PT01\Tests\Operations
 */
class MultiplicationTest extends TestCase
{
    /**
     * @throws \PT01\Exceptions\OutOfRangeException
     */
    public function testSimpleMultiplication_example01()
    {
        $A = [
            [1, 0, 2],
            [-1, 3, 1]
        ];

        $B = [
            [3, 1],
            [2, 1],
            [1, 0]
        ];

        $expected = [
            [5, 1],
            [4, 2]
        ];

        $this->multiplication($A, $B, $expected);
    }

    private function multiplication(array $AData, array $BData, array $expectedResult)
    {
        $A = new Matrix(new MatrixShape(count($AData[0]), count($AData)));
        $A->fillWithArray($AData);
        $B = new Matrix(new MatrixShape(count($BData[0]), count($BData)));
        $B->fillWithArray($BData);

        /** @var MatrixResultOperationInterface $multiplication */
        $multiplication = new Multiplication();
        /** @var MatrixInterface $result */
        $result = $multiplication->execute($A, $B);

        $this->assertEquals($expectedResult, $result->toArray());
    }

    /**
     * @throws \PT01\Exceptions\OutOfRangeException
     */
    public function testSimpleMultiplication_example02()
    {
        $A = [
            [2, 5],
            [1, -2]
        ];

        $B = [
            [3, -1],
            [7, 4]
        ];

        $expected = [
            [41, 18],
            [-11, -9]
        ];

        $this->multiplication($A, $B, $expected);
    }
}