<?php
    // ABSOLUTE PATH: /home/a/u/aujmiller/public_html/cps276/assignments/assignment5/directories
    class Directories {

        public function createDir() {
        
            if (isset($_POST["submit"])) {

                // path to main directory
                $absolutePath = '/home/a/u/aujmiller/public_html/cps276/assignments/assignment5/directories/';

                // POST handling
                $dirName = $_POST["folderName"];
                $fileContent = $_POST["fileContent"];
                $dirPath = $absolutePath.$dirName;

                // Error statements
                if (file_exists($dirPath)) {
                    return "A directory with that name already exists.";
                }

                if(!mkdir($dirPath, 0777, true)) {
                    return "Failed to create directory.";
                }

                // To ensure 0777 privledges 
                chmod($dirPath, 0777);

                // Creating, Writing, and Saving the File
                touch($dirPath."/readme.txt");
                $file = fopen($dirPath."/readme.txt", "w");
                if (!$file) {
                    return "Failed to create file.";
                }
                fwrite($file, $fileContent);
                fclose($file);

                // Success Message and creating link to file on server
                $output = "File and directory were created successfully";
                $linkPath = "https://russet-v8.wccnet.edu/~aujmiller/cps276/assignments/assignment5/directories/";
                $filePath = $linkPath.$dirName."/readme.txt";
                $fileLink = "<a href='$filePath' target='_blank'>Path where file is located</a>";

                return $output.'<br>'.$fileLink;
            }
        }
    }

?>