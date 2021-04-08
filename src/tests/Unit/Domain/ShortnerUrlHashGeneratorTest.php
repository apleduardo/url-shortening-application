<?php

namespace App\Tests\Unit\Domain;

use App\Domain\ShortnerUrlHashGenerator;
use PHPUnit\Framework\TestCase;

class ShortnerUrlHashGeneratorTest extends TestCase
{
    public function testBuild()
    {
        $shortnerUrlHashGenerator = new ShortnerUrlHashGenerator();
        $urlToBuild = "http://www.test.com/fasdfasdfkahskdfgajghd/asjdfgaksjdgfah";
        $hash = "8298a7";
        $this->assertEquals(
            $hash, 
            $shortnerUrlHashGenerator->build($urlToBuild)
        );
    }
}
