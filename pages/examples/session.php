<?php 
session_start();
$err=error_log("Something Is Not Right");
$self='http://localhost/RSCE1/pages/examples/sign-in.php';
if (isset($_POST['submit']))
{
    $_SESSION["user_option"]=$_POST['user_option'];
    $_SESSION["username"]=$_POST['username'];
    $_SESSION["password"]=$_POST['password'];
    $locate='http://localhost/RSCE1/index.php';
    $locate2='http://localhost/RSCE1/pages/examples/404.php';

//DTE ADMIN VALIDATION...
    if ($_POST['user_option']=='DTE-Admin' && $_POST['username']=="admin" && $_POST['password']=="123") 
    {
        header("Location:$locate");
        exit();
    }
    else if ($_POST['user_option']=='Institute' && $_POST['username']=="admin" && $_POST['password']=="123") 
    {
        header("Location:$locate2");
        exit();
    }
    else if ($_POST['user_option']=='Student' && $_POST['username']=="admin" && $_POST['password']=="123") 
    {
        header("Location:$locate2");
        exit();
    }
    else
    {
        echo "Please Enter Valid Username & Password";
    }
}
else
{
    echo "";
}
?>
