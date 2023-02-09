<?php
// Connect to the database
$conn = mysqli_connect("hostname", "username", "password", "database_name");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the id from the URL
$id = $_GET['id'];

// Select the data from the users table with the specified id
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Output the data
    $row = mysqli_fetch_assoc($result);
        echo "Name: " . $row["name"]. "<br>";
        echo "Age: " . $row["age"]. "<br>";
        echo "Contact Number: " . $row["contact_number"]. "<br>";
        echo "Email Address: " . $row["email_address"]. "<br>";
        echo "Gender: " . $row["gender"]. "<br>";
} else {
    echo "0 results";
}

// Close the connections
mysqli_close($conn);
?>
