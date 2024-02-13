<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $year = $_POST["year"];

    $sql = "INSERT INTO books (id, title, author, publication_year) VALUES ('$id','$title', '$author', $year)";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: secondpage.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
