<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

    $database = 'CSPSDB';
    $username = 'root';
    $password = '';
    $host = 'localhost';

    $db = new PDO("mysql:host=$host", $username, $password);
    $query = "CREATE DATABASE IF NOT EXISTS $database";
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec($query);
        $db->exec("USE $database");
        $db->exec("
            CREATE TABLE IF NOT EXISTS `users` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `username` VARCHAR(255) NOT NULL,
                `password` VARCHAR(255) NOT NULL,
                `role` VARCHAR(255) DEFAULT 'user',
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            )
        ");
        
        $db->exec("
        CREATE TABLE IF NOT EXISTS region (
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            psgcCode VARCHAR(255) DEFAULT NULL,
            regDesc TEXT,
            regCode VARCHAR(255) UNIQUE NOT NULL
        );
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS province (
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                psgcCode VARCHAR(255) DEFAULT NULL,
                provDesc TEXT,
                regCode VARCHAR(255) NOT NULL,
                provCode VARCHAR(255) UNIQUE NOT NULL,
                FOREIGN KEY (regCode) REFERENCES region(regCode)
            );
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS municipality (
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                psgcCode VARCHAR(255) DEFAULT NULL,
                citymunDesc TEXT,
                regCode VARCHAR(255) NOT NULL,
                provCode VARCHAR(255) NOT NULL,
                citymunCode VARCHAR(255) UNIQUE NOT NULL,
                FOREIGN KEY (regCode) REFERENCES region(regCode),
                FOREIGN KEY (provCode) REFERENCES province(provCode)
            );
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS barangay (
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                brgyCode VARCHAR(255) UNIQUE NOT NULL,
                brgyDesc TEXT,
                regCode VARCHAR(255) NOT NULL,
                provCode VARCHAR(255) NOT NULL,
                citymunCode VARCHAR(255) NOT NULL,
                FOREIGN KEY (regCode) REFERENCES region(regCode),
                FOREIGN KEY (provCode) REFERENCES province(provCode),
                FOREIGN KEY (citymunCode) REFERENCES municipality(citymunCode)
            );
        ");
            
        $db->exec("
            CREATE TABLE IF NOT EXISTS `block` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `description` VARCHAR(255) NOT NULL,
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            )
        ");
        $db->exec("
            CREATE TABLE IF NOT EXISTS `course` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `description` VARCHAR(255) NOT NULL,
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            )
        ");
        $db->exec("
            CREATE TABLE IF NOT EXISTS `subject` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `description` VARCHAR(255) NOT NULL,
                `unit` VARCHAR(255) NOT NULL,
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            )
        ");
        $db->exec("
            CREATE TABLE IF NOT EXISTS `room` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `floor` VARCHAR(255) NOT NULL,
                `type` VARCHAR(255) NOT NULL,
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            )
        ");
        $db->exec("
            CREATE TABLE IF NOT EXISTS `teacher` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `firstname` VARCHAR(255) NOT NULL,
                `lastname` VARCHAR(255) NOT NULL,
                `middlename` VARCHAR(255) NOT NULL,
                `suffix` VARCHAR(255) NOT NULL,
                `birthdate` VARCHAR(255) NOT NULL,
                `sex` VARCHAR(255) NOT NULL,
                `region` VARCHAR(255) NOT NULL,
                `province` VARCHAR(255) NOT NULL,
                `municipality` VARCHAR(255) NOT NULL,
                `barangay` VARCHAR(255) NOT NULL,
                `address` VARCHAR(255) NOT NULL,
                `phone` VARCHAR(255) NOT NULL,
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`),
                FOREIGN KEY (`region`) REFERENCES region(`regCode`),
                FOREIGN KEY (`province`) REFERENCES province(`provCode`),
                FOREIGN KEY (`municipality`) REFERENCES municipality(`citymunCode`),
                FOREIGN KEY (`barangay`) REFERENCES barangay(`brgyCode`)
            )
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS `schedule` (
                `id` INT NOT NULL AUTO_INCREMENT,
                `block_id` INT NOT NULL,
                `course_id` INT NOT NULL,
                `subject_id` INT NOT NULL,
                `room_id` INT NOT NULL,
                `teacher_id` INT NOT NULL,
                `monday` BOOLEAN NOT NULL DEFAULT 0,
                `tuesday` BOOLEAN NOT NULL DEFAULT 0,
                `wednesday` BOOLEAN NOT NULL DEFAULT 0,
                `thursday` BOOLEAN NOT NULL DEFAULT 0,
                `friday` BOOLEAN NOT NULL DEFAULT 0,
                `saturday` BOOLEAN NOT NULL DEFAULT 0,
                `sunday` BOOLEAN NOT NULL DEFAULT 0,
                `time_start` VARCHAR(255) NOT NULL,
                `time_end` VARCHAR(255) NOT NULL,
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`),
                FOREIGN KEY (`block_id`) REFERENCES `block`(`id`) ON DELETE CASCADE,
                FOREIGN KEY (`course_id`) REFERENCES `course`(`id`) ON DELETE CASCADE,
                FOREIGN KEY (`subject_id`) REFERENCES `subject`(`id`) ON DELETE CASCADE,
                FOREIGN KEY (`room_id`) REFERENCES `room`(`id`) ON DELETE CASCADE,
                FOREIGN KEY (`teacher_id`) REFERENCES `teacher`(`id`) ON DELETE CASCADE
            )
        ");

        $db->exec("
            CREATE VIEW IF NOT EXISTS teacher_view AS
                SELECT 
                    t.id,
                    t.firstname,
                    t.lastname,
                    t.middlename,
                    t.suffix,
                    t.birthdate,
                    t.sex,
                    r.regDesc AS region,
                    p.provDesc AS province,
                    m.citymunDesc AS municipality,
                    b.brgyDesc AS barangay,
                    t.address,
                    t.phone,
                    t.created_at
                FROM 
                    teacher t
                    JOIN region r ON t.region = r.regCode
                    JOIN province p ON t.province = p.provCode
                    JOIN municipality m ON t.municipality = m.citymunCode
                    JOIN barangay b ON t.barangay = b.brgyCode;
        ");

        $db->exec("
            CREATE VIEW IF NOT EXISTS schedule_view AS
                SELECT 
                    s.id,
                    b.id AS block_id,
                    c.id AS course_id,
                    sub.id AS subject_id,
                    r.id AS room_id,
                    t.id AS teacher_id,
                    b.name AS block_name,
                    c.name AS course_name,
                    sub.name AS subject_name,
                    sub.unit AS subject_unit,
                    r.name AS room_name,
                    s.monday,
                    s.tuesday,
                    s.wednesday,
                    s.thursday,
                    s.friday,
                    s.saturday,
                    s.sunday,
                    CONCAT(t.firstname, ' ', t.lastname) AS teacher_name,
                    CONCAT(
                        IF(s.monday = 1, 'M', ''),
                        IF(s.tuesday = 1, 'T', ''),
                        IF(s.wednesday = 1, 'W', ''),
                        IF(s.thursday = 1, 'Th', ''),
                        IF(s.friday = 1, 'F', ''),
                        IF(s.saturday = 1, 'Sa', ''),
                        IF(s.sunday = 1, 'Su', '')
                    ) AS days,
                    s.time_start AS time_start,
                    s.time_end AS time_end,
                    s.created_at
                FROM
                    schedule s
                JOIN
                    block b ON s.block_id = b.id
                JOIN
                    course c ON s.course_id = c.id
                JOIN
                    subject sub ON s.subject_id = sub.id
                JOIN
                    room r ON s.room_id = r.id
                JOIN
                    teacher t ON s.teacher_id = t.id;
        ");

        $db->exec("
            CREATE VIEW IF NOT EXISTS today_schedule_view AS
                SELECT 
                    s.id,
                    b.name AS block_name,
                    c.name AS course_name,
                    sub.name AS subject_name,
                    r.name AS room_name,
                    CONCAT(t.firstname, ' ', t.lastname) AS teacher_name,
                    CONCAT(
                        IF(s.monday = 1, 'M', ''),
                        IF(s.tuesday = 1, 'T', ''),
                        IF(s.wednesday = 1, 'W', ''),
                        IF(s.thursday = 1, 'Th', ''),
                        IF(s.friday = 1, 'F', ''),
                        IF(s.saturday = 1, 'Sa', ''),
                        IF(s.sunday = 1, 'Su', '')
                    ) AS days,
                    s.time_start AS time_start,
                    s.time_end AS time_end,
                    s.created_at
                FROM
                    schedule s
                JOIN
                    block b ON s.block_id = b.id
                JOIN
                    course c ON s.course_id = c.id
                JOIN
                    subject sub ON s.subject_id = sub.id
                JOIN
                    room r ON s.room_id = r.id
                JOIN
                    teacher t ON s.teacher_id = t.id
                WHERE
                    CASE
                        WHEN DAYOFWEEK(CURRENT_DATE()) = 1 THEN s.sunday
                        WHEN DAYOFWEEK(CURRENT_DATE()) = 2 THEN s.monday
                        WHEN DAYOFWEEK(CURRENT_DATE()) = 3 THEN s.tuesday
                        WHEN DAYOFWEEK(CURRENT_DATE()) = 4 THEN s.wednesday
                        WHEN DAYOFWEEK(CURRENT_DATE()) = 5 THEN s.thursday
                        WHEN DAYOFWEEK(CURRENT_DATE()) = 6 THEN s.friday
                        WHEN DAYOFWEEK(CURRENT_DATE()) = 7 THEN s.saturday
                    END = 1;

        ");

        
        $db->beginTransaction();

        $stmt = $db->prepare("SELECT COUNT(*) FROM `users` WHERE `username` = 'admin'");
        $stmt->execute();
        $userExists = $stmt->fetchColumn();
        
        if (!$userExists && basename($_SERVER['PHP_SELF']) != 'create-account.php') {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            session_destroy();
            header('Location: create-account.php');
            exit();
        }        

        $db->commit();

    } catch(PDOException $e) {
        die("Error creating database: " . $e->getMessage());
        $db = null;
    }
?>