<?php declare(strict_types=1);

namespace Bases;

use Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    /** @dataProvider additionDataProvider */
    public function testShouldAddTwoNumbers(int $firstParameter, int $secondParameter, int $expectedResult): void
    {
        // when
        $result = $this->calculator->add($firstParameter, $secondParameter);

        // then
        $this->assertEquals($expectedResult, $result);
    }

    /** @dataProvider  subtractionDataProvider */
    public function testShouldSubtractTwoNumbers(int $firstParameter, int $secondParameter, int $expectedResult): void
    {
        // when
        $result = $this->calculator->subtract($firstParameter, $secondParameter);

        // then
        $this->assertEquals($expectedResult, $result);
    }

    /** @dataProvider multiplicationDataProvider */
    public function testShouldMultiplyTwoNumbers(int $firstParameter, int $secondParameter, int $expectedResult): void
    {
        // when
        $result = $this->calculator->multiply($firstParameter, $secondParameter);

        // then
        $this->assertEquals($expectedResult, $result);
    }

    /** @dataProvider divisionDataProvider */
    public function testShouldDivideTwoNumbers(int $firstParameter, int $secondParameter, int $expectedResult): void
    {
        // when
        $result = $this->calculator->divide($firstParameter, $secondParameter);

        // then
        $this->assertEquals($expectedResult, $result);
    }

    // given
    public function additionDataProvider(): array
    {
        return [
            ['firstParameter' => 2, 'secondParameter' => 3, 'expectedResult' => 5],
            ['firstParameter' => 12, 'secondParameter' => 7, 'expectedResult' => 19],
            ['firstParameter' => 18, 'secondParameter' => -3, 'expectedResult' => 15],
        ];
    }

    // given
    public function subtractionDataProvider(): array
    {
        return [
            ['firstParameter' => 3, 'secondParameter' => 2, 'expectedResult' => 1],
            ['firstParameter' => -3, 'secondParameter' => -3, 'expectedResult' => 0],
            ['firstParameter' => -4, 'secondParameter' => 5, 'expectedResult' => -9],
        ];
    }

    // given
    public function multiplicationDataProvider(): array
    {
        return [
            ['firstParameter' => 3, 'secondParameter' => 2, 'expectedResult' => 6],
            ['firstParameter' => -3, 'secondParameter' => -3, 'expectedResult' => 9],
            ['firstParameter' => -4, 'secondParameter' => 5, 'expectedResult' => -20],
        ];
    }

    // given
    public function divisionDataProvider(): array
    {
        return [
            ['firstParameter' => 6, 'secondParameter' => 2, 'expectedResult' => 3],
            ['firstParameter' => -9, 'secondParameter' => -3, 'expectedResult' => 3],
            ['firstParameter' => -20, 'secondParameter' => 5, 'expectedResult' => -4],
        ];
    }
}
