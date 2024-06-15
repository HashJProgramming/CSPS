<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once './connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id']; 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $maidenname = $_POST['maidenname'];
    $birthdate = $_POST['birthdate'];
    $birthplace = $_POST['birthplace'];
    $email = $_POST['email'];
    $civil = $_POST['civil'];
    $phone = $_POST['phone'];
    $zipcode = $_POST['zipcode'];
    $citizenship = $_POST['citizenship'];
    $sex = $_POST['sex'];
    $present_address = $_POST['address1'];
    $permanent_address = $_POST['address2'];

    // Check if firstname, lastname, middlename, and maidenname combination already exists
    $sql_check = "SELECT * FROM applications WHERE firstname = :firstname AND lastname = :lastname AND middlename = :middlename AND maidenname = :maidenname AND id != :id";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':id', $id);
    $stmt_check->bindParam(':firstname', $firstname);
    $stmt_check->bindParam(':lastname', $lastname);
    $stmt_check->bindParam(':middlename', $middlename);
    $stmt_check->bindParam(':maidenname', $maidenname);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'Combination of firstname, lastname, middlename, and maidenname already exists!');
    } else {
        $sql = "UPDATE applications SET firstname = :firstname, lastname = :lastname, middlename = :middlename, maidenname = :maidenname, birthdate = :birthdate, birthplace = :birthplace, email = :email, civil = :civil, phone = :phone, zipcode = :zipcode, citizenship = :citizenship, sex = :sex, present_address = :present_address, permanent_address = :permanent_address WHERE id = :id";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':middlename', $middlename);
        $stmt->bindParam(':maidenname', $maidenname);
        $stmt->bindParam(':birthdate', $birthdate);
        $stmt->bindParam(':birthplace', $birthplace);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':civil', $civil);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':zipcode', $zipcode);
        $stmt->bindParam(':citizenship', $citizenship);
        $stmt->bindParam(':sex', $sex);
        $stmt->bindParam(':present_address', $present_address);
        $stmt->bindParam(':permanent_address', $permanent_address);

        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'Application updated successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update application!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
