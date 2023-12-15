<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
    $conn = mysqli_connect('localhost','root','','contactform') or die("Connection Failed");

    if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Message']))
    {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Message=$_POST['Message'];

        $sql = "INSERT INTO `contactdetails` (`Name`, `Email`,`Message`)  VALUES ('$Name','$Email','$Message')";
        if(mysqli_query($conn,$sql))
        {
           echo "<h1>Thank You! Your Submission Accepted</h1>";
        }
        else
        {
            echo "Error Occured";
        }

    }
}

?>