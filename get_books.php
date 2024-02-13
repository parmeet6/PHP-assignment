<?php
include 'connection.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . $row["author"] . "</td>";
        echo "<td>" . $row["publication_year"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No books found</td></tr>";
}

$conn->close();
?>
