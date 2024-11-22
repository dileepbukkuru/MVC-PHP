<?php

class HelloModel
{
    public function getMessage()
    {
        // Path to the text file
        $filePath = __DIR__ . '/database.txt';

        // Check if the file exists
        if (file_exists($filePath)) {
            // Read and return the file content
            return file_get_contents($filePath);
        } else {
            // Return an error message if the file is missing
            return "Error: Message file not found.";
        }
    }
}
