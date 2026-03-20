<?php

echo "-------------------------------------------------------------<br>";
echo "Write a PHP program to connect with a MySQL database, retrieve records from a table using a SELECT query, and display the retrieved data in an HTML table format.<br>";
echo "Name : Vyom Panchal<br>";
echo "En.no : 24082291017<br>";
echo "-------------------------------------------------------------<br><br>";

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";  
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Student";  
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    echo "<h3>Student Records</h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No records found.";
}

mysqli_close($conn);

?>