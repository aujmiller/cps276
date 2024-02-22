<?php 

// Swap first and last, (Austin Miller) to Last, First (Miller, Austin) by using explode function, split on a space.
// Index 0 first name, Index 1 last name, concatenate to string with comma: concatenate with \n to new line for output
// $string = arr[1].", ".arr[0]
// sort on \n like you did with space


class AddNames {

    private $names = array();
    private $name = "";

    public function formControl() {

        if(isset($_POST['inputNames'])) {
            $name = $_POST['inputNames'];
            $this->addName($name);
        }

        if(isset($_POST['clearNames'])) {
            $this->clearNames();
        }
    }   

    public function addName($name) {
        $this->names[] = $name;
    }

    public function clearNames() {
        $this->names = array();
    }

    public function displayNames() {
        sort($this->names);
        $nameResult = '';
        // if ($_POST['nameList'] == "") {
        //     return "";
        // }
        foreach ($this->names as $name) {
             $nameSplit = explode(' ', $name);
             $nameResult .= $nameSplit[1] . ', ' . $nameSplit[0] . "\n";
        }
        return $nameResult;
    }

}



?>