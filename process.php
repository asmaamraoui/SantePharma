
<?php
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:login2.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from employee where UName='".$_POST['UName']."' and Pass='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:register.php");
            }
            else
            {
                header("location:login2.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>