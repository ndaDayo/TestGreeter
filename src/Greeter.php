<?php
// src/Greeter.php
namespace App\Greeter;


class Greeter
{
    /**
     * @var Clock
     */
    private $clock;

    /**
     * @var MorningTimeRange
     */
    private $morningTimeRange;

    /**
     * Greeter constructor.
     *
     * @param Clock            $clock
     * @param MorningTimeRange $morningTimeRange
     */
    public function __construct(Clock $clock, MorningTimeRange $morningTimeRange)
    {
        $this->clock = $clock;
        $this->morningTimeRange = $morningTimeRange;
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

        if ($this->morningTimeRange->contains($currentTime)) {
            return 'おはようございます';
        }
        return '';
    }

}
