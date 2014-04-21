<?php

class ClassTest extends PHPUnit_Framework_TestCase
{
  public function testArray()
  {
    $stack = [];
    $this->assertEquals(0, count($stack));

    $stack[] = 'foo';
    $this->assertEquals('foo', $stack[count($stack)-1]);
    $this->assertEquals(1, count($stack));

    $this->assertEquals('foo', array_pop($stack));
    $this->assertEquals(0, count($stack));
  }
}