<?php

namespace App\Greeter;

class Clock
{
    /**
     * 現在時刻を返す
     *
     * @return \DateTimeInterface
     * @throws \Exception
     */
    public function getCurrentTime(): \DateTimeInterface
    {
        return new \DateTimeImmutable();
    }
}