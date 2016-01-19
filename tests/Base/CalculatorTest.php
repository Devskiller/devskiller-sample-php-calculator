<?php

namespace Bases;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function shouldAddTwoNumbers()
    {
        // given
        $calculator = new \Calculator();

        // when
        $result = $calculator->add(2, 3);

        // then
        $this->assertEquals(5, $result);
    }

    /**
     * @test
     */
    public function shouldSubtractTwoNumbers()
    {
        // given
        $calculator = new \Calculator();

        // when
        $result = $calculator->subtract(3,2);

        // then
        $this->assertEquals(1, $result);
    }

    /**
     * @test
     */
	public function shouldMultiplyTwoNumbers() {
        // given
        $calculator = new \Calculator();

        // when
        $result = $calculator->multiply(2,3);

        // then
        $this->assertEquals(6, $result);
    }
    /**
     * @test
     */
	public function shouldDivideTwoNumbers() {
        // given
        $calculator = new \Calculator();

        // when
        $result = $calculator->divide(10,5);

        // then
        $this->assertEquals(2, $result);
    }
}
