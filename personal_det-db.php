<?php
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = '';
    $conn_error = 'Could Not Connect';
    $db = 'iawp';

    $con = mysqli_connect($mysql_host , $mysql_user , $mysql_pass) or die($conn_error);
        if(!mysqli_connect($mysql_host , $mysql_user , $mysql_pass) || !mysqli_select_db($con , $db))
            die('$conn_error');
        //if(isset($_POST["submit"])) 
        {  
            $name=$_POST["name"];
            $prn=$_POST["prn"];
            $branch=$_POST["branch"];
            $email=$_POST["email"];
            $mobile=$_POST["mobile"];
            $dob=$_POST["dob"];
            $nationality=$_POST["nationality"];
            $hobbies=$_POST["hobbies"];
            $cur_add=$_POST["cur_add"];
            $per_add=$_POST["per_add"];
            $gender=$_POST["mradio"];
        
             if (empty($name)) 
                die("Name is required");
            else {
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    die("Invalid name");
                }
                    }

            if (empty($prn)) {
                die("PRN is required");
             } else {
                if (!preg_match("/[0-9]+[A-za-z]+[0-9]+/",$prn)) {
                    die("Invalid PRN");
                }
                    }
            
             if (empty($branch))
                    die("Branch is required");
            else {
                if (!preg_match("/^[a-zA-Z ]*$/",$branch)) {
                    die("Invalid Branch");
                }
                    }
            
               if (empty($email)) 
                               die("Email is required");
                else {
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         die("Invalid email");
     }
   }
            if(empty($mobile))
                die("Please enter Mobile Number");
            else{
                if(!preg_match("/[0-9]{10}/",$mobile))
                    die("Invalid contact number");
            }
        
            if(empty($nationality))
            {
                die("Nationality is recquired");
            }
            else
            {
            if(!preg_match("/^[A-za-z]*$/",$nationality))
            {
                die("Invalid Nationality");
            }
            }
            if (empty($cur_add)) {
                die("Current Address is required");
             } else {
                if (!preg_match("/^[a-zA-Z0-9, ]*$/",$cur_add)) {
                    die("Invalid cur_add");
                }
                    }
            if (empty($per_add))
             die("Address is require");
        else {
                if (!preg_match("/^[a-zA-Z0-9, ]*$/",$per_add)) {
                    die("Invalid per_add");
                }
                    }
            

            //echo "$name ,$prn, $branch, $email, $mobile, $dob, $gender, $college, $nationality, $hobbies";
            $query="INSERT INTO p_d VALUES('$name', '$prn', '$branch', '$email', $mobile,'$dob','$nationality','$hobbies','$cur_add','$per_add','$gender' )" ;
             if(!$my=mysqli_query($con,$query))
                {
                    echo 'query no run';
                    echo mysqli_error($con);
                }
             else
                echo 'inserted';
     }
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
left {
	width: 20%
    float: left;
    text-align: left: ;
}
.right {
    width: 50%;
    margin-right:30%;
    float:right;
}
table {
    @margin-left: 15%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: darksalmon;
}
.BigText {
	width: 85%;
}
	</style>
	<title>Details</title>
</head>
<body>
    <div  style="background-color:bisque;width:90%;margin-left:5%;height:100%;margin-top:0px;">
	<h1 style="text-align:center;color:orange">Academic Details</h1>
	<form action="academic_det_db.php" method="POST" >
	<div>
	<table>
	<h3>Semister Grade Pointer</h3>
		<tr>
			<th>SEM</th>
			<th>I</th>
			<th>II</th>
			<th>III</th>
			<th>IV</th>
			
		</tr>
		<tr>
			<td>SPI</td>
			<td><input type="number" step="0.01" max="10" min="0" name="spi1" > </input></td>
			<td><input type="number" step="0.01" max="10" min="0" name="spi2"> </input></td>
			<td><input type="number" step="0.01" max="10" min="0" name="spi3"> </input></td>
			<td><input type="number" step="0.01" max="10" min="0" name="spi4"></input></td>
		</tr>
		<tr>
			<th>SEM</th>
			<th>V</th>
			<th>VI</th>
			<th>VII</th>
            <th>VIII</th>

		</tr>
		<tr>
			<td>SPI</td>
			<td><input type="number" step="0.01" max="10" min="0" name="spi5"> </input></td>
			<td><input type="number" step="0.01" max="10" min="0" name="spi6"> </input></td>
			<td><input type="number" step="0.01" max="10" min="0" name="spi7"> </input></td>
			<td><input type="number" step="0.01" max="10" min="0" name="spi8"> </input></td>
		</tr>
	</table><br>
	<label>CPI </label><input type="number" step="0.01" max="10" min="0" name="cpi"></input>
	<h3>SSC,HSC :</h3>
	<table>
		<tr>
			<th>Course</th>
			<th>Board/University</th>
			<th>School/College</th> 
			<th>Percentage</th>
		</tr>
		<tr>
			<td>SSC
			</td>
			<td><input type="text" class="BigText" name="board1"></input></td>
			<td><input type="text" class="BigText" name="sc1"></input></td>
			<td><input type="number" step="0.01" max=100 min=0 name="p1"></input></td>
		</tr>
		<tr style="background-color: darksalmon;">
			<td><select name="course2">
				<option>HSC</option>
				<option>Diploma</option>
				</select>
			</td>
			<td><input type="text" class="BigText" name="board2"></input></td>
			<td><input type="text" class="BigText" name="sc2"></input></td>
			<td><input type="number" step="0.01" max=100 min=0 name="p2"></input></td>
		</tr>
		</table>
<br>
<br>
		<input type="text" name="prn" value="<?php if(isset($prn)) echo $prn;?>" style="display:none;"/>
		<input style="align:center;width:5%;margin-left:46%;background-color: darksalmon;" type="submit" value="Next"name="submit" ></input>
		</form>
 	</div><br><br>
</div>
 </body>
</html>
