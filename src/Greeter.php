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

        if ($this->timeIsMorning($currentTime)) {
            return 'おはようございます';
        }

        return '';
    }

    /**
     *
     * @param \DateTimeInterface $currentTime
     * @return bool
     * @throws \Exception
     */
    private function timeIsMorning(\DateTimeInterface $currentTime): bool
    {
        return $currentTime >= new \DateTimeImmutable('05:00:00') & $currentTime < new \DateTimeImmutable('12:00:00');
    }
}
