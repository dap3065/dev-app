<?php

/*
 *
 */
class FizzBuzz {
    
    public $mod1;
    public $mod2;
    public $start;
    public $end;
    
   function __construct($start = 1, $end = 100, $mod1 = 3, $mod2 = 5) {
       $this->start = $start;
       $this->end = $end;
       $this->mod1 = $mod1;
       $this->mod2 = $mod2;
   }
   
   public function start() {
     for ($i=$this->start; $i<$this->end + 1; $i++) {
         $this->checkAndOutputValue($i);
     }
   }
   
   private function checkAndOutputValue($value) {
     switch ($value) {
        case (($value % 3 == 0) && ($value % 5 == 0)) : echo "FizzBuzz\n"; break;
        case ($value % 3 == 0) : echo "Fizz\n"; break;
        case ($value % 5 == 0) : echo "Buzz\n"; break;
        default : echo $value . "\n"; break;
     }
   }
}

$fizz = new FizzBuzz();
$fizz->start();

?>
