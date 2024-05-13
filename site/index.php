<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Viewer</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
</head>
<body>
    <div class="container">
        <div class="data-container">
            <h2>Student Database</h2>
            <table>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>CGPA</th>
                    <th>Additional Data</th>
                </tr>
                <?php
                // Include the database connection file
                include_once 'dbh.inc.php';

                try {
                    // Prepare and execute the query
                    $stmt = $pdo->query("SELECT * FROM students");
                    
                    // Fetch the results and display them in a table
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>
                                <td>{$row['student_id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['age']}</td>
                                <td>{$row['cgpa']}</td>
                                <td>{$row['additional_data']}</td>
                              </tr>";
                    }
                } catch(PDOException $e) {
                    // Display an error message if query fails
                    echo "<tr><td colspan='5'>Error: " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </table>
        </div>
        
        <div class="form-container">
            <h2>Add New Student</h2>
            <form action="insert.php" method="POST">
                <input type="number" name="student_id" placeholder="ID" required>
                <input type="text" name="name" placeholder="Name" required>
                <input type="number" name="age" placeholder="Age" required>
                <input type="number" step="0.01" name="cgpa" placeholder="CGPA" required>
                <input type="text" name="additional_data" placeholder="Additional Data">
                <input type="submit" value="Add Student">
            </form>
        </div>
    </div>
</body>
</html>
