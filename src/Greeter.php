<?php
// src/Greeter.php
namespace App\Greeter;

use App\Greeter\Clock;

class Greeter
{
    /**
     * @var Clock
     */
    private $clock;

    /**
     * Greeter constructor.
     *
     * @param Clock $clock
     */
    public function __construct(Clock $clock)
    {
        $this->clock = $clock;
    }


    /**
     * 朝ならおはようございますを返す
     *
     * @return string
     * @throws \Exception
     */
    public function greet(): string
    {
        $currentTime = $this->clock->getCurrentTime();

        if ($currentTime >= new \DateTimeImmutable('05:00:00') &&
            $currentTime < new \DateTimeImmutable('12:00:00')) {
            return 'おはようございます';
        }

        return '';
    }
}
