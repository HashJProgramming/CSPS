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
                `address` VARCHAR(255) NOT NULL,
                `phone` VARCHAR(255) NOT NULL,
                `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
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
            `day` VARCHAR(255) NOT NULL,
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
        
        $db->beginTransaction();
        $db->commit();

    } catch(PDOException $e) {
        die("Error creating database: " . $e->getMessage());
        $db = null;
    }
?>