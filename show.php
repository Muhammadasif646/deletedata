<?php
include("connection.php"); // Include database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }
        .edit-btn {
            background-color: blue;
        }
        .delete-btn {
            background-color: red;
        }
    </style>
</head>
<body>

    <h2>Student Records</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>

        <?php
        $sql = "SELECT * FROM students"; // Fetch all records
        $result = $conn->query($sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['phone'] . "</td>
                    <td>" . $row['course'] . "</td>
                    <td>
                        <a href='edit.php?id=" . $row['id'] . "' class='btn edit-btn'>Edit</a>
                        <a href='delete.php?id=" . $row['id'] . "' class='btn delete-btn' >Delete</a>
                    </td>
                  </tr>";
        }
        ?>

    </table>

</body>
</html>
