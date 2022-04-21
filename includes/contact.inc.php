<?php
if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php';
    $name = $_POST['uid'];
    $email = $_POST['mail'];
    $message = $_POST['msg'];
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: ../../contact.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    else {
        $sql = "SELECT uidName FROM contact WHERE uidName=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../contact.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $name);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../../contact.php?error=usertaken&mail=".$email);
                exit();
            }
            else {
                $sql = "INSERT INTO contact (uidName, emailName, messageName) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../../contact.php?error=sqlerror");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../../contact.php");
    exit();
}