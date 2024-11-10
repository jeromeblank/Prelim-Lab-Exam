<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Display</title>
    <link rel="stylesheet" type="text/css" href="data.css">
    <script src="scripts.js" defer></script> 
</head>
<body>
    <div class="container">
        <h1>Student Data Display</h1>
        <?php
        $xmlFile = 'students.xml';

        if (file_exists($xmlFile)) {
            $xml = simplexml_load_file($xmlFile);
            echo '<table>';
            echo '<tr><th>ID</th><th>Last Name</th><th>First Name</th><th>Gender</th><th>Course</th></tr>';
            
            foreach ($xml->student as $student) {
                echo '<tr>';
                echo '<td>' . $student['id'] . '</td>';
                echo '<td>' . $student->lastname . '</td>';
                echo '<td>' . $student->firstname . '</td>';
                echo '<td>' . $student->gender . '</td>';
                echo '<td>' . $student->course . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No data found.';
        }
        ?>
        <a href="form.php">Go to Data Entry Page</a>
    </div>
</body>
</html>
