<?php

require 'Pdo_methods.php';

class ListFilesProc extends PdoMethods{

    public function listFiles() {

        $pdo = new PdoMethods();
        $sql = "SELECT fileName, filePath FROM pdoTable ORDER BY fileName;";

        $records = $pdo->selectNotBinded($sql);

        $output = "<ul>";

        foreach ($records as $row){
            $output .= '<li><a target="_blank" href='.$row["filePath"].'>'.$row["fileName"].'</a></li>';
        }
        $output .= "</ul>";

        return $output;
    }
}
?>