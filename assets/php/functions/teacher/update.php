<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id'];
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

    $sql_check = "SELECT * FROM `teacher` WHERE id != :id AND firstname = :firstname AND lastname = :lastname";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':id', $id);
    $stmt_check->bindParam(':firstname', $firstname);
    $stmt_check->bindParam(':lastname', $lastname);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'Teacher already exists!');
    } else {
        $sql = "UPDATE `teacher` SET `firstname` = :firstname, `lastname` = :lastname, `middlename` = :middlename, `suffix` = :suffix, `birthdate` = :birthdate, `sex` = :sex, `region` = :region, `province` = :province, `municipality` = :municipality, `barangay` = :barangay, `address` = :address, `phone` = :phone WHERE `id` = :id";
                
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
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
            $response = array('status' => 'success', 'message' => 'Teacher updated successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update teacher!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
