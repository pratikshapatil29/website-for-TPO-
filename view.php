<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$db='iawp';
$conn_err='connection error';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
if(!$con || !mysqli_select_db($con,$db))
    die($conn_err);
//if(isset($_POST["submit"])   
    $user=$_POST["username"];
    $pass=$_POST["password"];
    if($user=='pp'and $pass=='123')
    {
        echo "<script> location.href='admin.php'; </script>";
        exit;

    }
    $qu="select username from logpass where username='$user' and password='$pass'";
    $res=$con->query($qu);
    if($res->num_rows>0)
    {
         $q="select * from p_d where prn='$user'";
                $res=$con->query($q);
                $row = $res->fetch_assoc();
                if($res->num_rows>0)
                {
                  

                    echo "<table border=2 width=50% align=center bgcolor=bisque>";
                    echo"<div align='center'>Personal Details</div>"."<br>";

                    echo"<tr>";
                    echo"<td>"."Name"."</td>";
                    echo"<td>".$row["name"]."</td>";
                    echo"</tr>";
                    
                    echo"<tr>";
                    echo"<td>"."PRN Number"."</td>";
                    echo"<td>".$row["prn"]."</td>";
                    echo"</tr>";
                    
                    echo"<tr>";
                    echo"<td>"."Branch"."</td>";
                    echo"<td>".$row["branch"]."</td>";
                    echo"</tr>";
                    
                    echo"<tr>";
                    echo"<td>"."Email-id"."</td>";
                    echo"<td>".$row["email"]."</td>";
                    echo"</tr>";
                    
                    echo"<tr>";
                    echo"<td>"."Mobile Number"."</td>";
                    echo"<td>".$row["mobile"]."</td>";
                    echo"</tr>";
                    
                    echo"<tr>";
                    echo"<td>"."Date of birth"."</td>";
                    echo"<td>".$row["dob"]."</td>";
                    echo"</tr>";
                    
                    echo"<tr>";
                    echo"<td>"."Nationality"."</td>";
                    echo"<td>".$row["nationality"]."</td>";
                    echo"</tr>";
                    
                    echo"<tr>";
                    echo"<td>"."Hobbies"."</td>";
                    echo"<td>".$row["hobbies"]."</td>";
                    echo"</tr>";
                    
                    echo"<tr>";
                    echo"<td>"."Current Address"."</td>";
                    echo"<td>".$row["cur_add"]."</td>";
                    echo"</tr>";
                    
                    echo"<tr>";
                    echo"<td>"."Permanent Address"."</td>";
                    echo"<td>".$row["per_add"]."</td>";
                    echo"</tr>";
                    
                    echo "</table>"."<br>";
                }
            
                $q="select * from academic where prn='$user'";
                $res=$con->query($q);
                $row = $res->fetch_assoc();
                if($res->num_rows>0)
                {
                    echo"<div align='center'>Academic Details</div>"."<br>";
                    //echo"".$row["ssc_board"];
                    $ssc='SSC';
                    $hsc='HSC';
                    echo "<table border=2 width=50% align=center bgcolor=bisque>";
                    echo"<tr>";
                    echo"<td>"."Class"."</td>";
                    echo"<td>"."Marks"."</td>";
                    echo"<td>School</td>";
                    echo"<td > Board </td>";
                    echo"</tr>";
                        echo "<tr>";
                        echo"<td>".$ssc."</td>";
                        echo "<td>".$row['board1']."</td>";
                        echo "<td>".$row['sch1']."</td>";
                        echo "<td>".$row['ssc']."</td>";
                        echo "</tr>";
                    echo "<tr>";
                        echo"<td>".$hsc."</td>";
                        echo "<td>".$row['board2']."</td>";
                        echo "<td>".$row['sch2']."</td>";
                        echo "<td>".$row['hsc']."</td>";
                        echo "</tr>";
                        echo "</table>";
                    echo"<div align=center>"."Semesterwise pointer"."</div>";
                    echo "<table border=2 width=50% align=center bgcolor=bisque>"; 
                    echo"<tr>
                    <td >I</td>
                    <td >II</td>
                    <td >III</td>
                    <td>IV</td>
                    <td>V</td>
                    <td>VI</td>
                    <td>VII</td>
                    <td>VIII</td>
                    </tr>";
                    echo "<tr>";
                        echo "<td>".$row['spi1']."</td>";
                        echo "<td>".$row['spi2']."</td>";
                        echo "<td>".$row['spi3']."</td>";
                        echo "<td>".$row['spi4']."</td>";
                        echo "<td>".$row['spi5']."</td>";
                    echo "<td>".$row['spi6']."</td>";
                    echo "<td>".$row['spi7']."</td>";
                    echo "<td>".$row['spi8']."</td>";
                        echo "</tr>";
                    echo "</table>";
                        
                        echo"<br>";
                    echo"<div align=center>CPI ".$row['cpi']."</div>";
            }
        

    }
    else 
    		  die("Invalid user name or password!");

?>