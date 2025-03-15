<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["psw"];
    // You can now process and store the data as needed

    // For example, you can echo the data for testing purposes
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
}
?>
