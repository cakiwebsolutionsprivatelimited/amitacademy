<?php
// Define source and destination folder paths
$sourceFolder = '/Root/webroot/ROOT/atompay/';
$destinationFolder = '/Root/webroot/ROOT/atompay1/';

// List files in the source folder
$files = scandir($sourceFolder);

// Loop through files
foreach ($files as $file) {
    // Exclude "." and ".." directories
    if ($file != '.' && $file != '..') {
        // Build source and destination paths
        $sourcePath = $sourceFolder . $file;
        $destinationPath = $destinationFolder . $file;
        
        // Move file from source to destination
        if (rename($sourcePath, $destinationPath)) {
            echo "File '$file' moved successfully.\n";
        } else {
            echo "Error moving file '$file'.\n";
        }
    }
}
?>


