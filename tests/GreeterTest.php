<?php

namespace Tests\Greeter;

use App\Greeter\Greeter;
use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    /**
     * @var Greeter
     */
    public $SUT;

    /**
     * @test
     */
    public function あいさつする()
    {
        $currentTime = new \DateTimeImmutable('08:00:00');
        $this->assertThat($this->SUT->greet($currentTime), $this->equalTo('おはようございます'));
    }

    protected function setUp()
    {
       $this->SUT = new Greeter;
    }
}