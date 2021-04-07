<?php

namespace App\Tests\Domain;

use App\Domain\ShortnerUrlGenerator;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use PHPUnit\Framework\TestCase;

class ShortnerUrlGeneratorTest extends TestCase
{
    public function testBuild()
    {
        $hash = '05b157';
        $urlExpected = "http://localhost:80/MDViMTU3";

        $parameterStub = $this->getMockBuilder(ParameterBag::class)
                         ->setMethods(['get'])
                         ->getMock();
        
        $parameterStub->expects($this->once())
                         ->method('get')
                         ->willReturn('http://localhost:80/');

        $shortnerUrlGenerator = new ShortnerUrlGenerator($parameterStub);
        $object = $shortnerUrlGenerator->build($hash);

        $this->assertEquals(
            $urlExpected, 
            $object->url
        );
    }
}
