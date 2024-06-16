<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $suffix = $_POST['suffix'];
    $birthdate = $_POST['birthdate'];
    $sex = $_POST['sex'];
    $region = $_POST['region'];
    $province = $_POST['province'];
    $municipality = $_POST['municipality'];
    $barangay = $_POST['barangay'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql_check = "SELECT * FROM `teacher` WHERE firstname = :firstname AND lastname = :lastname";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':firstname', $firstname);
    $stmt_check->bindParam(':lastname', $lastname);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'Teacher already exists!');
    } else {
        $sql = "INSERT INTO `teacher` (`firstname`, `lastname`, `middlename`, `suffix`, `birthdate`, `sex`, `region`, `province`, `municipality`, `barangay`, `address`, `phone`) 
                VALUES (:firstname, :lastname, :middlename, :suffix, :birthdate, :sex, :region, :province, :municipality, :barangay, :address, :phone)";
                
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':middlename', $middlename);
        $stmt->bindParam(':suffix', $suffix);
        $stmt->bindParam(':birthdate', $birthdate);
        $stmt->bindParam(':sex', $sex);
        $stmt->bindParam(':region', $region);
        $stmt->bindParam(':province', $province);
        $stmt->bindParam(':municipality', $municipality);
        $stmt->bindParam(':barangay', $barangay);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phone', $phone);
        
        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'Teacher added successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to add teacher!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
