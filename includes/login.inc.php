<?php


if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid || $password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }   
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdcheck = password_verify($password, $row['pwdUsers']);
                if ($pwdcheck == false) {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }  
                elseif ($pwdcheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['uidUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    
                    header("Location: ../login.php?login=success");
                    header("Location: ../index.php");
                    exit();

                }   else {
                    header("Location: ../login.php?error=sqlerror");
                    exit();
                }
            }   else {
                header("Location: ../login.php?error=usernotfound");
                exit();
            }
        }
    }

}   
else {
    header("Location: ../index.php");
    exit();
}