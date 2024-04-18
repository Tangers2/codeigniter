<?php
    $stud_id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = '';
    $db_name = 'student_db';

    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_errno){
        die ('Connection Failed'.$conn->error);
    }

    $sql = "DELETE FROM tbl_student where stud_id='".$stud_id."'";
    $conn ->query($sql);

    header('location:Srms_main.php');
?>
