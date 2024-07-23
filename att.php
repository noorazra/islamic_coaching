<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Attendance</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Mark Attendance</h1>
    <form method="post" action="mark_att.php">
        <table>
            <tr>
                <th>Student Name</th>
                <th>Status</th>
            </tr>
            <?php
            // Fetch students from the database
            $conn = new mysqli('localhost', 'root', '', 'al_hira');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, name FROM students where scales like '%arabic%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>
                            <input type='radio' name='status[" . $row["id"] . "]' value='Present' required> Present
                            <input type='radio' name='status[" . $row["id"] . "]' value='Absent'> Absent
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No students found</td></tr>";
            }

            $conn->close();
            ?>
        </table>
        <input type="submit" value="Submit">
    </form>
</body>
</html>