<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)
include_once 'assets/php/functions/connection.php';

function regions (){
    global $db;
    $sql = 'SELECT * FROM `region`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
        $selected = ($row['regCode'] === '09') ? 'selected' : '';
        ?>
        <option value="<?=$row['regCode']?>" <?=$selected?>><?=$row['regDesc']?></option>
        <?php
    }
}

function province (){
    global $db;
    $sql = 'SELECT * FROM `province` WHERE `provCode` = 0973';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            $selected = ($row['provCode'] === '0973') ? 'selected' : '';
            ?>
            <option value="<?=$row['provCode']?>" <?=$selected?>><?=$row['provDesc']?></option>
            <?php
        
    }
}



function municipality (){
    global $db;
    $sql = 'SELECT * FROM `municipality` WHERE `citymunCode` = 097322';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            $selected = ($row['citymunCode'] === '097322') ? 'selected' : '';
            ?>
            <option value="<?=$row['citymunCode']?>" <?=$selected?>><?=$row['citymunDesc']?></option>
            <?php
        
    }
}

function barangay (){
    global $db;
    $sql = 'SELECT * FROM `barangay` WHERE `brgyCode` = 097322014';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            $selected = ($row['brgyCode'] === '097322014') ? 'selected' : '';
            ?>
            <option value="<?=$row['brgyCode']?>" <?=$selected?>><?=$row['brgyDesc']?></option>
            <?php
        
    }
}

function teacher (){
    global $db;
    $sql = 'SELECT * FROM `teacher`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['firstname']?> <?=$row['middlename']?> <?=$row['lastname']?></option>
            <?php
    }
}

function block (){
    global $db;
    $sql = 'SELECT * FROM `block`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php
    }
}


function course (){
    global $db;
    $sql = 'SELECT * FROM `course`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php
    }
}


function subject (){
    global $db;
    $sql = 'SELECT * FROM `subject`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php
    }
}

function room (){
    global $db;
    $sql = 'SELECT * FROM `room`';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
            ?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php
    }
}

