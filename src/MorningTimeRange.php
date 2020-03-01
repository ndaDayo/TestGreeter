<?php

namespace App\Greeter;

class MorningTimeRange
{
    /**
     * @param \DateTimeInterface $target
     * @return bool
     * @throws \Exception
     */
    public function contains(\DateTimeInterface $target) :bool
    {
        return $target >= new \DateTimeImmutable('05:00:00') &&
               $target < new \DateTimeImmutable('12:00:00');
    }
}