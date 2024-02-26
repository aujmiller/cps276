<?php 

// Swap first and last, (Austin Miller) to Last, First (Miller, Austin) by using explode function, split on a space.
// Index 0 first name, Index 1 last name, concatenate to string with comma: concatenate with \n to new line for output
// $string = arr[1].", ".arr[0]
// sort on \n like you did with space


class AddNames {

    private $namesList = [];
    private $name = "";
    public $output = "";


    public function addNameList() {

        // Checks which button is chosen, and executes accordingly

        if (isset($_POST["addName"])) {

            $nameString = $_POST["inputNames"];
            $this->namesList = explode("\n", $_POST["nameList"]);
            $nameArray = explode(" ", $nameString);
            $nameString = $nameArray[1] . ", " . $nameArray[0];
            array_push($this->namesList, $nameString);
            sort($this->namesList);
            $this->output = implode("\n", $this->namesList);

        } elseif (isset($_POST["clearNames"])) {

            $this->namesList = [];
            $this->output = "";
        }

        return $this->output;

    }

    // ALL CODE BELOW IS COMMENTED OUT, HAD TO REBUILD FROM GROUND UP TO WORK OUT ERRORS

    // public function formControl() {

    //     if(isset($_POST['inputNames'])) {
    //         $name = $_POST['inputNames'];
    //         $this->addName($name);
    //     }

    //     if(isset($_POST['clearNames'])) {
    //         $this->clearNames();
    //     }
    // }   

    // public function addName($name) {
    //     $this->names[] = $this->convertName($name);
    // }

    // public function displayNames() {
    //     sort($this->names);
    //     $namesString = implode("\n", $this->names);
    //     return $namesString;
    // }

    // public function convertName($name) {
    //     $namePieces = explode(' ', $name);
    //     return $namePieces[1] . ', ' . $namePieces[0];
    // }

    // public function clearNames() {
    //     $this->names = array();
    // }

    // public function testDisplayNames() {
    //     $nameList = $_POST['nameList'];
    //     $names[] = explode("\n", $nameList)
    //     $names[] .= 
    // }

    // public function convertName($name) {
    //     $namePieces = explode(' ', $name);
    //     global $string = $namePieces[1] . ', ' . $namePieces[0];
    //     return $string;
    // }

    // public function displayNames() {
    //     sort($this->names);
    //     $nameResult = '';
    //     // if ($_POST['nameList'] == "") {
    //     //     return "";
    //     // }
    //     foreach ($this->names as $name) {
    //          $nameSplit = explode(' ', $name);
    //          $nameResult .= $nameSplit[1] . ', ' . $nameSplit[0] . "\n";
    //     }
    //     return $nameResult;
    // }

}

?>