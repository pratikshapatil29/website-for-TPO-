<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="background-color: bisque">
  <h2 style="color:orange;text-align:center">Personal Details</h2>
  <form class="form-horizontal" action="personal_det-db.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="name" placeholder="Enter Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prn">PRN No.:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="prn" placeholder="Enter PRN Number">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2">Branch:</label>
      <div class="col-sm-6">
      <select class="selectpicker" name="branch">
      <option>--Select branch--</option>
      <option>CSE</option>
      <OPTION>IT</OPTION>
      <option>CIVIL</option>
      <OPTION>ELECTRICAL</OPTION>
      <OPTION>ELECTRONICS</OPTION>
      <OPTION>MECHANICAL</OPTION>
      </select>
      </div>
    </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email id:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" placeholder="Enter email id">
    </div>  
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="mob">Mobile No.:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile No.">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="dob" placeholder="Enter DOB">
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="nationality">Nationality:</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="nationality">
    </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="hobbies">Hobbies:</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="hobbies">
    </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="cur_add">Current Address:</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="cur_add">
    </div>
    </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Permanent Address:</label>
        <div class="col-sm-6">
          <input type="text" name="per_add" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Gender:</label>
        <div class="col-sm-6">
           <label class="radio-inline">
      <input type="radio" name="mradio" id="m1" checked="checked">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="mradio" id="f1">Female
    </label>
   
        </div>
      </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="college">College Name:</label>
    <div class="col-sm-6">
      <p class="form-control-static">Walchand college of Engineering</p>
    </div>

    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-6">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </div>
</div>
  </form>

</body>
</html>
