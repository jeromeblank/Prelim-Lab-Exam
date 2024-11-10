<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Entry</title>
    <link rel="stylesheet" type="text/css" href="data.css">
    <script src="scripts.js" defer></script> 
</head>
<body>
    <div class="container">
        <h1>Student Data Entry</h1>
        <form name="studentForm" action="save_data.php" method="POST" onsubmit="return validateForm()">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" placeholder="Enter your ID">

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" placeholder="Enter your last name">

            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" placeholder="Enter your first name">

            <label>Gender:</label>
            <input type="radio" name="gender" value="Male" onchange="changeBackgroundColor()"> Male
            <input type="radio" name="gender" value="Female" onchange="changeBackgroundColor()"> Female
            <input type="radio" name="gender" value="Others" onchange="changeBackgroundColor()"> Others

            <label for="course">Course:</label>
            <select id="course" name="course">
                <option value="BSIT">BSIT</option>
                <option value="BSIS">BSIS</option>
                <option value="BSCS">BSCS</option>
                <option value="BSEMC">BSEMC</option>
                <option value="BSDataScience">BS Data Science</option>
            </select>

            <input type="submit" value="Submit">
        </form>
        <a href="display.php">Go to Data Display Page</a>
    </div>
</body>
</html>
