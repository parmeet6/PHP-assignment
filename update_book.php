<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $year = $_POST["year"];

    $sql = "UPDATE books SET title='$title', author='$author', publication_year=$year WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: secondpage.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

