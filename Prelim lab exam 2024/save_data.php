<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = htmlspecialchars($_POST["id"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $firstname = htmlspecialchars($_POST["firstname"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $course = htmlspecialchars($_POST["course"]);

    $xmlFile = 'students.xml';

    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);
    } else {
        $xml = new SimpleXMLElement('<students></students>');
    }

 
    $student = $xml->addChild('student');
    $student->addAttribute('id', $id);
    $student->addChild('lastname', $lastname);
    $student->addChild('firstname', $firstname);
    $student->addChild('gender', $gender);
    $student->addChild('course', $course);


    $xml->asXML($xmlFile);

    header("Location: display.php");
    exit();
}
?>
