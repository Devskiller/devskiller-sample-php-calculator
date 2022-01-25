<?php declare(strict_types=1);

namespace verify_pack;

use Calculator;
use PHPUnit\Framework\TestCase;

class RandomNumbersTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    /** @dataProvider randomDataProvider */
    public function testShouldAddTwoNumbers(int $firstParameter, int $secondParameter): void
    {
        // when
        $result = $this->calculator->add($firstParameter, $secondParameter);

        // then
        $this->assertEquals($firstParameter + $secondParameter, $result);
    }

    /** @dataProvider randomDataProvider */
    public function testShouldSubtractTwoNumbers(int $firstParameter, int $secondParameter): void
    {
        // when
        $result = $this->calculator->subtract($firstParameter, $secondParameter);

        // then
        $this->assertEquals($firstParameter - $secondParameter, $result);
    }

    /** @dataProvider randomDataProvider */
    public function testShouldMultiplyTwoNumbers(int $firstParameter, int $secondParameter): void
    {
        // when
        $result = $this->calculator->multiply($firstParameter, $secondParameter);

        // then
        $this->assertEquals($firstParameter * $secondParameter, $result);
    }

    /** @dataProvider randomDataProvider */
    public function testShouldDivideTwoNumbers(int $firstParameter, int $secondParameter): void
    {
        // when
        $result = $this->calculator->divide($firstParameter, $secondParameter);

        // then
        $this->assertEquals((float) $firstParameter / $secondParameter, $result);
    }

    // given
    public function randomDataProvider(): array
    {
        return [
            ['firstParameter' => 10, 'secondParameter' => 15],
            ['firstParameter' => 0, 'secondParameter' => 1],
            ['firstParameter' => 0, 'secondParameter' => -5],
            ['firstParameter' => -5, 'secondParameter' => 5],
            ['firstParameter' => 100, 'secondParameter' => 1],
        ];
    }
}
