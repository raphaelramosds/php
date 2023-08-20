<?php

class Newsletter
{
    public function createEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Throw an new exception with message "Invalid email" and code 1 
            throw new Exception("Invalid email", 1);
        } else {
            echo "Email successfuly created";
        }
    }
}
$newsletter = new Newsletter();

// Try/catch listens possible exceptions
try {
    $newsletter->createEmail("contato@");
} catch (Exception $e) {
    // Object $e has properties: message, code, file, line
    echo "Message: " . $e->getMessage() . "\n";
    echo "Code: " . $e->getCode() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    echo "File: " . $e->getFile() . "\n";
}
