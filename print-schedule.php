<?php
require_once 'assets/php/functions/auth/authentication.php';
require 'assets/php/functions/connection.php';

$block = isset($_POST['block']) ? $_POST['block'] : '';
$course = isset($_POST['course']) ? $_POST['course'] : '';
$year = isset($_POST['year']) ? $_POST['year'] : '';
$semester = isset($_POST['semester']) ? $_POST['semester'] : '';

function getSchedule() {
    global $block, $course, $db;
    $sql = "SELECT * FROM `schedule_view` WHERE block_id = :block AND course_id = :course";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':block', $block);
    $stmt->bindParam(':course', $course);
    $stmt->execute();
    $result = $stmt->fetchAll(); 
    if ($stmt->rowCount() > 0) {
        foreach($result as $row){
            ?>
                <tr>
                    <td class="text-center"><?=$row['days']?></td>
                    <td class="text-center"><?=date('h:i A', strtotime($row['time_start']))?> - <?=date('h:i A', strtotime($row['time_end']))?></td>
                    <td class="text-center"><?=$row['subject_name']?></td>
                    <td class="text-center"><?=$row['teacher_name']?></td>
                    <td class="text-center">ROOM <?=$row['room_name']?></td>
                </tr>
            <?php
        }
    } else {
        ?>
            <tr>
                <td colspan="5" class="text-center">No schedule found for the selected parameters.</td>
            </tr>
        <?php
    }
}

$sql = "SELECT block.name AS block_name, course.name AS course_name
        FROM block
        JOIN course ON block.id = :block_id AND course.id = :course_id;";
$stmt = $db->prepare($sql);
$stmt->bindParam(':block_id', $block);
$stmt->bindParam(':course_id', $course);
$stmt->execute();
$result = $stmt->fetch();
$block_name = $result['block_name'];
$course_name = $result['course_name'];
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Class Schedule Plotting System</title>
    <link rel="icon" type="image/png" sizes="480x480" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Nunito.css">
    <link rel="stylesheet" href="assets/css/Articles-Cards-images.css">
    <link rel="stylesheet" href="assets/css/Change-Password-floating-Label.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean-icons.css">
</head>

<body onload="printPageAndRedirect()">
    <div class="container-fluid py-3 py-xl-3">
        <div class="row">
            <div class="col-md-8 col-xl-7 text-center text-primary mx-auto"><img src="assets/img/icon.jpg" width="100em">
                <h2 class="mt-1"><strong>WEST PRIME HORIZON INSTITUTE, Inc.</strong></h2>
                <p class="w-lg-50">V. Sagun cor. M. Roxas St. San Francisco Dist. Pagadian City<br>Call No. : <strong>0920-798-3228(</strong>Smart)/<strong>0977-804-7489</strong>(Globe)</p>
            </div>
        </div>
        <div class="border rounded-0 border-1 border-dark table-responsive"><table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="6" class="bg-warning text-light text-center">STUDENT LOAD (COLLEGE DEPARTMENT)</th>
            </tr>
            <tr>
                <th colspan="6" class="bg-danger text-light text-center"><?=$semester?> SY. <?=$year?></th>
            </tr>
            <tr>
                <th colspan="6" class="text-center"><h3><?= $block_name?> - <?= $course_name?></h3></th>
            </tr>
            <tr>
                <th colspan="6" class="bg-primary text-light"></th>
            </tr>
            <tr>
                <th class="text-center">DAY</th>
                <th class="text-center">TIME</th>
                <th class="text-center">SUBJECT</th>
                <th class="text-center">TEACHER</th>
                <th class="text-center">ROOM NO.</th>
            </tr>
        </thead>
        <tbody>
            <!-- HERE -->
             <?php
             getSchedule();
             ?>
        </tbody>
    </table></div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6 text-center">
                <h3>Prepared by</h3>
                <p>______________________________________</p>
            </div>
            <div class="col-md-6 text-center">
                <h3>Approved by:</h3>
                <p>______________________________________</p>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/three.min.js"></script>
    <script src="assets/js/vanta.waves.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/vanta-background.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script>
        function printPageAndRedirect() {
            window.print();
            setTimeout(function() {
                window.location.href = 'schedule.php';
            }, 1000); // Redirect after 1 second (adjust as needed)
        }
    </script>
</body>

</html>
