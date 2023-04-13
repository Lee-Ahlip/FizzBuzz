<?php 
class fizz_buzz
{
   public function calFizzBuzz($rep)
   {
      if ($rep%15 == 0)
      {
         return "Fizz Buzz";
      }
      elseif ($rep%3 == 0)
      {
         return "Fizz";
      }
      elseif ($rep%5 == 0)
      {
         return "Buzz";
      }
      else
      {
         return strval($rep);
      }
   }
}

$rep = (int) readline("Saisir un nombre : ");
$fizzBuzz = new fizz_buzz();
$result = $fizzBuzz -> calFizzBuzz($rep);
echo "$result \n";