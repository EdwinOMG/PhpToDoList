<?php
session_start();
include '/Users/edwin/Documents/Counter/Php To do list/db_connection.php'; // Include the database connection file

if(isset($_POST['task'])) {
    $task = $_POST['task'];

    // Prepare and execute a SQL statement to insert tasks into the database
    $stmt = $conn->prepare("INSERT INTO TASKDATA (task_name) VALUES (?)");
    $stmt->bind_param("s", $task);
    $stmt->execute();
    $stmt->close();
}

// Retrieve tasks from the database
$sql = "SELECT * FROM TASKDATA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<li>' . $row['task_name'] . ' <button class="btn btn-sm btn-danger delete" data-id="' . $row['id'] . '">Delete</button></li>';
    }
}

$conn->close();
?>
