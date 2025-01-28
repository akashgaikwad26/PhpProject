<?php

class test {
  function HelloWorld ($name){
  return "Hello, $name!";
  }
}

$test = new test();
echo $test->HelloWorld("PHP");
