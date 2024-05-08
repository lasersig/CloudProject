<?php
include_once 'dbh.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $cgpa = $_POST['cgpa'];
    $additional_data = $_POST['additional_data'];

    try {
        $stmt = $pdo->prepare("INSERT INTO students (student_id, name, age, cgpa, additional_data) VALUES (:student_id, :name, :age, :cgpa, :additional_data)");
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':cgpa', $cgpa);
        $stmt->bindParam(':additional_data', $additional_data);
        $stmt->execute();
        header("Location: index.php"); // Redirect back to the main page after insertion
        exit();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
