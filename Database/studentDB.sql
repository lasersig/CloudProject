CREATE DATABASE my_students;
USE my_students;
CREATE TABLE students (
    student_id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT,
    cgpa DECIMAL(3, 2),
    additional_data TEXT
);
-- Insert Student 1
INSERT INTO students (student_id, name, age, cgpa, additional_data)
VALUES (2206188, 'Youssef Wael', 21, 3.5, 'Guitar'),
    (2206191, 'Mustafa Othman', 20, 3.3, 'Bondo2'),
    (22011938, 'Ahmed Hamed', 21, 3.6, 'Gym');
SELECT *
FROM students;