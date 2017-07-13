<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$conn_error='could not connect';
$db='iawp';
$con = mysqli_connect($mysql_host , $mysql_user , $mysql_pass) or die($conn_error);
        if(!mysqli_connect($mysql_host , $mysql_user , $mysql_pass) || !mysqli_select_db($con , $db))
            die('$conn_error');
   // if(isset($_POST["submit"]))
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $query="INSERT INTO logpass VALUES('$username','$password')";
    }
        if(!$my=mysqli_query($con,$query))
                {
                    echo 'query no run';
                    echo mysqli_error($con);
                }
             else
                echo 'inserted';
    
?>