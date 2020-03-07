<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @test
     */
    public function 文字列Rを渡した時、文字列YESを返す()
    {
        $sample = new Sample();
        $result = $sample->solve('R');
        $this->assertSame('Yes',$result);
    }
}