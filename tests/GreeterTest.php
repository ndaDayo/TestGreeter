<?php

namespace Tests\Greeter;

use App\Greeter\Clock;
use App\Greeter\Greeter;
use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    /**
     * @var Greeter
     */
    public $SUT;

    private $clock;

    protected function setUp()
    {
        $this->clock = $this->getMockBuilder(Clock::class)->getMock();
        $this->SUT = new Greeter($this->clock);
    }

    /**
     * @test
     */
    public function 朝ならおはようございます()
    {
        $this->clock->expects($this->once())->method('getCurrentTime')->willReturn(new \DateTimeImmutable('08:00:00'));
        $this->assertThat($this->SUT->greet(), $this->equalTo('おはようございます'));
    }

    /**
     * @test
     */
    public function 朝ではないならあいさつなし()
    {
        $this->clock->expects($this->once())->method('getCurrentTime')->willReturn(new \DateTimeImmutable('15:00:00'));
        $this->assertThat($this->SUT->greet(), $this->equalTo(''));
    }
}