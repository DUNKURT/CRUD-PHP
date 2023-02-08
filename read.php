<?php
// Connect to the database
$conn = mysqli_connect("hostname", "username", "password", "database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select all data from the users table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Output the data
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
mysqli_close($conn);
?>
