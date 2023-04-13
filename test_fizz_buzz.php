<?php
require 'fizz_buzz.php';
    class FizzBuzzTest extends PHPUnit\Framework\TestCase
    {
        private $fizzBuzz;

        public function testReturnFizzForMultiplesOfThree()
        {
            $fizzBuzz = new fizz_buzz();
            $this -> assertEquals("Fizz", $fizzBuzz -> calFizzBuzz(3));
            $this -> assertEquals("Fizz", $fizzBuzz -> calFizzBuzz(6));
            $this -> assertEquals("Fizz", $fizzBuzz -> calFizzBuzz(9));
            $this -> assertEquals("Fizz", $fizzBuzz -> calFizzBuzz(12));
        }

        public function testReturnBuzzForMultiplesOfFive()
        {
            $fizzBuzz = new fizz_buzz();
            $this -> assertEquals("Buzz", $fizzBuzz -> calFizzBuzz(5));
            $this -> assertEquals("Buzz", $fizzBuzz -> calFizzBuzz(10));
        }

        public function testReturnFizzBuzzForMultiplesOfThreeAndFive()
        {
            $fizzBuzz = new fizz_buzz();
            $this -> assertEquals("Fizz Buzz", $fizzBuzz -> calFizzBuzz(15));
        }
        public function testRepForTheOtherNumber()
        {
            $fizzBuzz = new fizz_buzz();
            $this -> assertEquals("1", $fizzBuzz -> calFizzBuzz(1));
            $this -> assertEquals("2", $fizzBuzz -> calFizzBuzz(2));
            $this -> assertEquals("4", $fizzBuzz -> calFizzBuzz(4));
            $this -> assertEquals("7", $fizzBuzz -> calFizzBuzz(7));
            $this -> assertEquals("8", $fizzBuzz -> calFizzBuzz(8));
            $this -> assertEquals("11", $fizzBuzz -> calFizzBuzz(11));
            $this -> assertEquals("13", $fizzBuzz -> calFizzBuzz(13));
            $this -> assertEquals("14", $fizzBuzz -> calFizzBuzz(14));
        }
    }
?>