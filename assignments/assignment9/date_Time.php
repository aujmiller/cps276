<?php

require_once "Pdo_methods.php";

class Date_time extends PdoMethods {

    public function init() {

        if (isset($_POST['addNote'])) {
            return $this->addNote();
        } else if (isset($_POST['getNotes'])) {
            return $this->displayNotes();
        }
    }


    private function addNote() {

        $dateTime = $_POST['dateTime'];
        $note = $_POST['note'];

        if ($_POST['dateTime'] == "" || $_POST['note'] == "") {
            $output = "You must enter a date and a note.";
        }

        // return $dateTime;

        $strTime = strtotime($dateTime);

        // return $strTime;

        $pdo = new PdoMethods();

        $sql = "INSERT INTO note (date_time, note) VALUES (:date_time, :note);";
        $bindings = [
            [":date_time", $strTime, "int"],
            [":note", $note, "str"]
        ];

        $output = $pdo->otherBinded($sql, $bindings);

        if ($output === 'error') {
            $msg = 'There was an error adding the note.';
        } else {
            $msg = 'Note has been added';
        }

        return $msg;

    }

    private function displayNotes() {

        $begDate = $_POST['begDate'];
        $endDate = $_POST['endDate'];
        
        $begStrTime = strtotime($begDate);
        $endStrTime = strtotime($endDate);

        $formattedDate = "";

        $pdo = new PdoMethods();
        $sql = "SELECT date_time, note FROM note WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time DESC";
        $bindings = [
            [':begDate', $begStrTime, 'str'],
            [':endDate', $endStrTime, 'str']
        ];
        $records = $pdo->selectBinded($sql, $bindings);

        if ($begStrTime == "" || $endStrTime == "") {
            return "You must enter a beginning and end date.";
        }

        if ($records == 'error') {
            return "There was an error retrieving the notes.";
        } else {
            if(count($records) != 0) {
                $output = "<table class='table table-striped table-bordered'><tr><th>Date and Time</th><th>Note</th></tr>";
                foreach($records as $row) {
                    $formattedDate = date("n/j/Y  g:i A", $row['date_time']);
                    $output .= "<tr><td>{$formattedDate}</td><td>{$row['note']}</td></tr>";
                }
                $output .= "</table>";
                return $output;
            } else {
                return "No records found.";
            }
        }

    }


}


?>

