<?php
require '../includes/connection.php';

if($userRole > 1) {
    header("Location: http://localhost:63342/bakalarkaBrlej/homepage.php");
    exit();
}

if(isset($_POST['addSubjectButton'])) {
    mysqli_query($con, "INSERT INTO subjects values(NULL,'$_POST[addSubject]')");
}
header("Location: http://localhost:63342/bakalarkaBrlej/homepage.php");
?>
