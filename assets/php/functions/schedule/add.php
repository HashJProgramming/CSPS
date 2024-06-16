<?php
// Hash'J Programming - hashJProgramming (Joshua Ambalong)

require_once '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    // Check if start time and end time are empty
    if (empty($start_time) || empty($end_time)) {
        $response = array('status' => 'error', 'message' => 'Start time and end time are required!');
        echo json_encode($response);
        exit;
    }

    if (strtotime($start_time) < strtotime('7:00 AM')) {
        $response = array('status' => 'error', 'message' => 'Start time must be equal or greater than 7:00 AM!');
        echo json_encode($response);
        exit;
    }
    
    // Check if end time is greater than 8:30 PM
    if (strtotime($end_time) > strtotime('8:30 PM')) {
        $response = array('status' => 'error', 'message' => 'End time must not be greater than 8:30 PM!');
        echo json_encode($response);
        exit;
    }

    
    $teacher_id = $_POST['teacher'];
    $block_id = $_POST['block'];
    $course_id = $_POST['course'];
    $subject_id = $_POST['subject'];
    $room_id = $_POST['room'];
    $days = [
        'monday' => isset($_POST['monday']) ? 1 : 0,
        'tuesday' => isset($_POST['tuesday']) ? 1 : 0,
        'wednesday' => isset($_POST['wednesday']) ? 1 : 0,
        'thursday' => isset($_POST['thursday']) ? 1 : 0,
        'friday' => isset($_POST['friday']) ? 1 : 0,
        'saturday' => isset($_POST['saturday']) ? 1 : 0,
        'sunday' => isset($_POST['sunday']) ? 1 : 0
    ];

    // Create placeholders and values for the days
    $dayPlaceholders = [];
    foreach ($days as $day => $value) {
        if ($value) {
            $dayPlaceholders[] = "$day = 1";
        }
    }
    $dayCondition = implode(' OR ', $dayPlaceholders);

    // Check for time conflict
    $sql_check = "SELECT * FROM `schedule` 
                  WHERE (
                      (:start_time < time_end AND :end_time > time_start)
                      OR (:start_time < time_start AND :end_time > time_start)
                      OR (:start_time = time_start AND :end_time = time_end)
                  ) AND ($dayCondition)";
                  
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bindParam(':start_time', $start_time);
    $stmt_check->bindParam(':end_time', $end_time);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        $response = array('status' => 'error', 'message' => 'Schedule already exists!');
    } else {
        $sql = "INSERT INTO `schedule` (`time_start`, `time_end`, `teacher_id`, `block_id`, `course_id`, `subject_id`, `room_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) 
                VALUES (:start_time, :end_time, :teacher_id, :block_id, :course_id, :subject_id, :room_id, :monday, :tuesday, :wednesday, :thursday, :friday, :saturday, :sunday)";
                
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':start_time', $start_time);
        $stmt->bindParam(':end_time', $end_time);
        $stmt->bindParam(':teacher_id', $teacher_id);
        $stmt->bindParam(':block_id', $block_id);
        $stmt->bindParam(':course_id', $course_id);
        $stmt->bindParam(':subject_id', $subject_id);
        $stmt->bindParam(':room_id', $room_id);

        // Bind each day value directly
        $stmt->bindParam(':monday', $days['monday']);
        $stmt->bindParam(':tuesday', $days['tuesday']);
        $stmt->bindParam(':wednesday', $days['wednesday']);
        $stmt->bindParam(':thursday', $days['thursday']);
        $stmt->bindParam(':friday', $days['friday']);
        $stmt->bindParam(':saturday', $days['saturday']);
        $stmt->bindParam(':sunday', $days['sunday']);
        
        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'Schedule added successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to add schedule!');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method!');
}

echo json_encode($response);
?>
