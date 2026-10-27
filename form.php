<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars(
        $_POST["student_name"] ?? "",
        ENT_QUOTES,
        "UTF-8"
    );

    $roll = htmlspecialchars(
        $_POST["roll_number"] ?? "",
        ENT_QUOTES,
        "UTF-8"
    );

    $course = htmlspecialchars(
        $_POST["course"] ?? "",
        ENT_QUOTES,
        "UTF-8"
    );

    echo "<h2>Student Form Submitted Successfully!</h2>";

    echo "Student Name: " . $name . "<br>";
    echo "Roll Number: " . $roll . "<br>";
    echo "Course: " . $course . "<br>";

    echo "<p>Thank you for submitting your details.</p>";

} else {
    echo "Please submit the form first.";
}

?>