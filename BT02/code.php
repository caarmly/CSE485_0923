<!-- sửa, xóa -->
<?php
session_start();
require 'connect.php';

if(isset($_POST['delete_user']))
{
    $id = mysqli_real_escape_string($conn, $_POST['delete_user']);

    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);

    $query = "UPDATE users SET fullName='$fullName', email='$email', mobile='$mobile' WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);

    $query = "INSERT INTO users (fullName,email,mobile) VALUES ('$fullName','$email','$mobile')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "User Created Successfully";
        header("Location: add.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Created";
        header("Location: add.php");
        exit(0);
    }
}

?>