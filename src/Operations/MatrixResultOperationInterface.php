<?php

namespace PT01\Operations;


use PT01\Matrices\MatrixInterface;

interface MatrixResultOperationInterface extends OperationInterface
{
    public function execute(MatrixInterface $A, MatrixInterface $B): MatrixInterface;
}