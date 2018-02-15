<?php
namespace Test;
include 'autoload.inc.php';
use PHPUnit\Framework\TestCase;
use Domaine\Measure;

class MeasureTest extends TestCase {

    public function testMeasure() {
        
        
        $measure = new Measure(30, 40);
        
        $this->assertEquals(30, $measure->temperature);
        
        $this->assertEquals(40, $measure->humidite);
           
    }
  
}
    