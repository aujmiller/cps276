<?php
require 'Pdo_methods.php';

 // absolute path: /home/a/u/aujmiller/public_html/cps276/assignments/assignment7/pdfFiles
 // web path: https://russet-v8.wccnet.edu/~aujmiller/cps276/assignments/assignment7/pdfFiles/

    class FileUpload {   

        public function fileUpload() {
        
        $msg = "";
       
        if ($_FILES["file"]["error"] == 4){
            $msg = "No file was uploaded. Make sure you choose a file to upload.";
        }

        elseif($_FILES["file"]["size"] > 100000 || $_FILES["file"]["error"] == 1){
            $msg = "File is too big.";
        }

        elseif ($_FILES["file"]["type"] != "application/pdf") {
            $msg = "<p>File must be a PDF file.</p>";
        }

        elseif (!move_uploaded_file( $_FILES["file"]["tmp_name"], "pdfFiles/" . $_FILES["file"]["name"])){
            $msg = "<p>Sorry, there was a problem uploading the file.</p>";
        }

        else {

            $pdo = new PdoMethods();

            $sql = "INSERT INTO pdoTable (fileName, filePath) VALUES (:fname, :fpath)";
            $bindings = [
            [':fname',$_POST['fileName'],'str'],
            [':fpath','pdfFiles/'.$_FILES['file']['name'],'str']
            ];

            $output = $pdo->otherBinded($sql, $bindings);

            if($output === 'error'){
                return 'There was an error adding the file info to the database.';
                $msg = "File has been added, but there was an error uploading the file info to the database";
            }
            else {
            $msg = "File has been added.";
            }
        } 
        return $msg;
    }

}








?>