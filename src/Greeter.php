<?php
// src/Greeter.php
namespace App\Greeter;

class Greeter
{
    /**
     * 朝ならおはようございますを返す
     *
     * @param \DateTimeInterface $currentTime
     * @return string
     */
    public function greet(\DateTimeInterface $currentTime) :string
    {
        if($currentTime){
            return 'おはようございます';
        }
    }
}
