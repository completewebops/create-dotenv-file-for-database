<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $projectName = $_POST['project_name'];
    $dbName = $_POST['db_name'];
    $dbHost = $_POST['db_host'];
    $dbUser = $_POST['db_user'];
    $dbPassword = $_POST['db_password'];
    
    // Define the file path and contents
    $envFilePath = __DIR__ . '/' . $projectName . '.env';
    $envFileContents = "PROJECT_NAME=$projectName\n";
    $envFileContents .= "DB_NAME=$dbName\n";
    $envFileContents .= "DB_HOST=$dbHost\n";
    $envFileContents .= "DB_USER=$dbUser\n";
    $envFileContents .= "DB_PASSWORD=$dbPassword\n";

    // Write the file
    file_put_contents($envFilePath, $envFileContents);

    // Output a success message
    echo 'The .env file has been created.';
}
?>
