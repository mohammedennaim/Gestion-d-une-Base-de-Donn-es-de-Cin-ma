<?php

class MyClass {
  private $test = 'hello';

  public function getTest() {
    return $this->test;
  }
  public function setTest($x) {
    $this->test = $x;
  }
}

$obj = new MyClass();

echo $obj->getTest();

$obj->setTest('welcome');

echo "<br>".$obj->getTest();

?>