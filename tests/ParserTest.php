<?php
use MyNameSpace\Parser;

class ParserTest extends PHPUnit_Framework_TestCase
{
    public function test_example(){
        $parser = new Parser();
        $this->assertEquals(0, $parser->parse());
    }
}

?>
