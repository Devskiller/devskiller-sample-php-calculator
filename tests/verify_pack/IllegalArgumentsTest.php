<?php declare(strict_types=1);

namespace verify_pack;

use Calculator;
use PHPUnit\Framework\TestCase;

class IllegalArgumentsTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    /** @dataProvider invalidDataProvider */
    public function testShouldThrowExceptionForDivisionByZero(int $firstParameter, int $secondParameter): void
    {
        $this->expectException(\InvalidArgumentException::class);

        // when
        $this->calculator->divide($firstParameter, $secondParameter);

        // then
        $this->fail('Division by zero is forbidden');
    }

    // given
    public function invalidDataProvider(): array
    {
        return [
            ['firstParameter' => 10, 'secondParameter' => 0],
            ['firstParameter' => 0, 'secondParameter' => 0],
            ['firstParameter' => -10, 'secondParameter' => 0],
        ];
    }
}
