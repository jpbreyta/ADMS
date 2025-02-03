<?php
// Load the .env file and set environment variables
function loadEnv($file = __DIR__ . '/../.env') {
    if (!file_exists($file)) {
        return;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '#') === 0) {
            continue; // Skip comments
        }
        list($name, $value) = explode('=', $line, 2);
        putenv("$name=$value");
    }
}

// Call the function to load .env variables
loadEnv();
