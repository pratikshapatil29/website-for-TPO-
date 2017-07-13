<!DOCKTYPE html>
<html>
    <body>

    <div style="background-color:bisque;height:700px;margin-top:0px;margin-left:8%;margin-right:8%;" >
        
    
        <div style="background-color:rgb(200,100,50);height:20%;align:center;border:2px solid black;">
            <br><p>JOB...</p>
            <div style="margin-left:35%;margin-top:15%;margin-right:35%;border:2px solid black;">
        <p style="text-align:center;">Set your username and password<p>
        <div >
            

            <form action="sub.php" method="POST">
                <label style="text-align:left;">Username  </label><input style="width:230px;" type="text" name="username"/>
                <br><br>
                <label>Password   </label><input style="width:230px" type="password" name="password"/><br><br>
                <input type="submit" name="submit" value="Submit" style="align:center;margin-left:150px">
            </form>
                
        </div>
        </div>
    </div>
        </div>
    </body>
</html>
<?php
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = '';
    $conn_error = 'Could Not Connect';
    $db = 'iawp';

    $con = mysqli_connect($mysql_host , $mysql_user , $mysql_pass) or die($conn_error);
        if(!mysqli_connect($mysql_host , $mysql_user , $mysql_pass) || !mysqli_select_db($con , $db))
            die('$conn_error');
if(isset($_POST["submit"]))
{
             $prn=$_POST["prn"];
             $ssc=$_POST["p1"];
             $hsc=$_POST["p2"];
             $cgpi1=$_POST["spi1"];
             $board1=$_POST["board1"];
             $sc1=$_POST["sc1"] ;     
            $board2=$_POST["board2"];
            $sc2=$_POST["sc2"] ;
            $cgpi2=$_POST["spi2"];
            $cgpi3=$_POST["spi3"];
            $cgpi4=$_POST["spi4"];
            $cgpi5=$_POST["spi5"];
            $cgpi6=$_POST["spi6"];
            $cgpi7=$_POST["spi7"];
            $cgpi8=$_POST["spi8"];
            $cgpi9=$_POST["cpi"];
           $query="INSERT  INTO academic values ('$prn','$board1','$sc1',$ssc,'$board2','$sc2',$hsc, $cgpi1,$cgpi2,$cgpi3,$cgpi4,$cgpi5,$cgpi6,$cgpi7,$cgpi8,$cgpi9)";
}
             if(!$my=mysqli_query($con,$query))
                {
                    echo 'query no run';
                    echo mysqli_error($con);
                }
             else
                echo 'inserted';
         
     ?>