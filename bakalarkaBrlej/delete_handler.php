<?php
session_start();
require 'includes/connection.php';

if(isset($_POST['userRole'])) {
    $userRole = $_POST['userRole'];
}

if($userRole > 1) {
    header("Location: http://localhost:63342/bakalarkaBrlej/homepage.php");
    exit();
}

$message = '';

if(isset($_POST['submitDeleteSubject'])) {

    $subjects = $_POST['subjects'];
    //string list nieco take separovane ciarkou
    $subjects = implode("','", $subjects);

    $query =
        " DELETE FROM `questions`" .
        " WHERE `subject` IN ('".$subjects."')";

    $result = mysqli_query($con, $query);

    if($result) {
        $message.= 'The selected subjects have been deleted successfully';
        header("Location: http://localhost:63342/bakalarkaBrlej/delete_subject.php?message='$message'");
        exit();
    }
    else
    {
        $message.= 'Delete error. The selected subjects have not been deleted successfully';
        header("Location: http://localhost:63342/bakalarkaBrlej/delete_subject.php?message='$message'");
        exit();
    }

}
else
{
    header("Location: http://localhost:63342/bakalarkaBrlej/test.php");
    exit();
}

?>
