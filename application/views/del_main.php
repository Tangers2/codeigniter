<?php
    $stud_id = $_GET["id"];



    $sql = "DELETE FROM tbl_student where stud_id='".$stud_id."'";
    $conn ->query($sql);

    header('location:Srms_main.php');
?>
