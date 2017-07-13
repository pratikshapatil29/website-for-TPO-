
<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$db='iawp';
$conn_err='connection error';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
if(!$con || !mysqli_select_db($con,$db))
    die($conn_err);
if(isset($_POST["submit"]))
{    
    $branch=$_POST["branch"];
    $ptr=$_POST["ptr"];

    $qu="select name,email,mobile,cpi from p_d,academic where p_d.prn=academic.prn and p_d.branch='$branch' and academic.cpi>'$ptr'";
    $res=$con->query($qu);
    echo "<table style border = '1'; bgcolor='bisque'; width=80%; align=center>";
            // *bgcolor='#fff'*>
    echo "<tr><th>Name</th><th>Email-id</th><th>Contact Number</th><th>CPI</th></tr>";
    if($res->num_rows>0)
    {
        while($row = $res->fetch_assoc())
        {      
        //echo ""$row["name"]."\t"."Email".$row["email"]."\t".$row["cpi"]."<br>";
        echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td><td>".$row["cpi"]."</td></tr>";
            
        }
    }
    echo "</table>";
}
?>