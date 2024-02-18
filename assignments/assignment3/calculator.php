<?php

class Calculator {
    private $_operator;
    private $_num1;
    private $_num2;

    public $error = "Cannot perform operation. You must have three arguments. A string for the operator
    (+,-,*,/) and two integers or floats for the numbers. You cannot divide by zero.";
   

    public function calc($operator = null, $num1 = null, $num2 = null) {

        $this->_operator = $operator;
        $this->_num1 = $num1;
        $this->_num2 = $num2;

        if ($operator === null || $num1 === null || $num2 === null ) {
            return $this->error."<br><br>";
        }
       
        if ($operator == "/" && $num2 == 0) {
            return $this->error."<br><br>";
        }

        // if (is_float($num1) === false && is_int($num1) === false) {
        //     return "Error: not a integer or float. <br><br>";
        // }

        // if (is_float($num2) === false && is_int($num2) === false) {
        //     return "Error: not a integer or float. <br><br>";
        // }

        if ($this->checkNum($num1) && $this->checkNum($num2)) {
            return $this->doMath($operator, $num1, $num2);
        } else {
            return $this->error."<br><br>";
        }
          
       return $this->doMath($operator, $num1, $num2);

    }

    private function checkNum($num) {

        if (is_int($num)) {
            return true;
        } else if (is_float($num)) {
            return true;
        } else {
            return false;
        }

    }

    public function doMath($operator, $num1, $num2) {
        $answer = 0;

        switch($operator) {
            case "+" : $answer = $num1 + $num2; break;
            case "-" : $answer = $num1 - $num2; break;
            case "*" : $answer = $num1 * $num2; break;
            case "/" : $answer = $num1 / $num2; break;
            default : $operator = "error"; break;
        }

        if ($operator === "error") {
            return $this->error."<br><br>";
        }

        return "The calculation is ".$num1." ".$operator." ".$num2.". The answer is ".$answer.". <br><br>";

    }

}

?>