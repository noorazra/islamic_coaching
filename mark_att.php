<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli('localhost', 'root', '', 'al_hira');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $status = $_POST['status'];
    $date = date("Y-m-d");

    foreach ($status as $student_id => $attendance_status) {
        $stmt = $conn->prepare("INSERT INTO attendance (student_id, date, status) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE status = ?");
        $stmt->bind_param("isss", $student_id, $date, $attendance_status, $attendance_status);
        $stmt->execute();
    }

    $conn->close();

    echo "<script>alert('Attandence marked Successfully');window.location.href='noorani.php';</script>";
}
?>