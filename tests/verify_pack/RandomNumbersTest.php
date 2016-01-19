<?php

namespace verify_pack;

class RandomNumbersTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function shouldAddTwoNumbers()
    {
        // given
        $a = rand(0, 100);
        $b = rand(0, 100);
        $calculator = new \Calculator();

        // when
        $result = $calculator->add($a,$b);

        // then
        $this->assertEquals($a+$b, $result);
    }

    /**
     * @test
     */
    public function shouldSubtractTwoNumbers()
    {
        // given
        $a = rand(0, 100);
                $b = rand(0, 100);
        $calculator = new \Calculator();

        // when
        $result = $calculator->subtract($a, $b);

        // then
        $this->assertEquals($a-$b, $result);
    }

    /**
     * @test
     */
    public function shouldMultiplyTwoNumbers()
    {
        // given
        $a = rand(0, 100);
                $b = rand(0, 100);
        $calculator = new \Calculator();

        // when
        $result = $calculator->multiply($a, $b);

        // then
        $this->assertEquals($a*$b, $result);
    }

    /**
     * @test
     */
    public function shouldDivideTwoNumbers()
    {
        // given
        $a = rand(0, 100);
        $b = rand(1, 100);
        $calculator = new \Calculator();

        // when
        $result = $calculator->divide($a, $b);

        // then
        $this->assertEquals(round($a/$b), $result);
    }
}