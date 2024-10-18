<!DOCTYPE HTML>
<html>
<head>
  <title>Students Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 

</head>  
<body>



<div class="container">
  <div class="col-lg-4" style="background-color:#f0f4fa;margin-top:10px;padding-bottom:10px">
    <h4><b>Student Form:</b></h4>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="myForm">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
      </div>
      <label for="name">Gender:</label>
      <div class="form-check">
          <label class="radio-inline">
          <input type="radio" name="gender" value="male" checked>Male
          </label>
          <label class="radio-inline">
          <input type="radio" name="gender" value="female">Female
          </label>
      </div>
      <div class="form-group">
        <label for="standard">Standard:</label>
        <input type="text" class="form-control" id="standard" placeholder="Standard" name="standard">
      </div>
      <div class="form-group">
        <label for="name">DOB:</label>
        <input type="date" class="form-control" id="dob" placeholder="Date of Birth" name="dob">
      </div>
      <div class="form-group">
        <label for="name">Age:</label>
        <input type="text" class="form-control" id="age" placeholder="Age" name="age">
      </div>
      <div class="form-group">
        <label for="father_name">Father Name:</label>
        <input type="text" class="form-control" id="father_name" placeholder="Father Name" name="father_name">
      </div>
      <div class="form-group">
        <label for="mobile">Father Mobile No:</label>
        <input type="number" class="form-control" id="mobile" placeholder="Father Mobile No" name="mobile" maxlength="10">
      </div>
      <center><button type="submit" class="btn btn-default btn-primary" onclick="store()" >Submit</button></center>

    </form>
</div>

<div class="col-lg-1"></div>
<div class="col-lg-7" style="background-color:#e9f0ed;margin-top:50px">
<?php
require_once("connection.php");
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
?>

<table class="table table-bordered">
    <caption><h4><b>Student Details:</b></h4></caption>
    <tr>
      <th>Name</th>
      <th>Gender</th>
      <th>Standard</th>
      <th>DOB</th>
      <th>Age</th>
      <th>Father Name</th>
      <th>Mobile</th>
    </tr>

<?php

while($row = mysqli_fetch_assoc($result))
{
  
?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['standard']; ?></td>
      <td><?php echo $row['dob']; ?></td>
      <td><?php echo $row['age']; ?></td>
      <td><?php echo $row['father_name']; ?></td>
      <td><?php echo $row['mobile']; ?></td>
    </tr>

<?php
  }
?>
</table>
<?php

$conn->close();

?>
</div>

</div>

</body>
</html>
<script>

// using Ajax to store data
function store()
{
  event.preventDefault();

  var name = document.getElementById("name").value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }

  var gender = document.querySelector('input[name="gender"]:checked').value;
  console.log(gender);
  if (gender == "" || gender == null) {
    alert("Gender must be filled out");
    return false;
  }

  var standard = document.getElementById("standard").value;
  if (standard == "") {
    alert("Standard must be filled out");
    return false;
  }

  var dob = document.getElementById("dob").value;
  if (dob == "") {
    alert("DOB must be filled out");
    return false;
  }

  var age = document.getElementById("age").value;
  if (age == "") {
    alert("Age must be filled out");
    return false;
  }

  var father_name = document.getElementById("father_name").value;
  if (father_name == "") {
    alert("Father Name must be filled out");
    return false;
  }

  var mobile = document.getElementById("mobile").value;
  if (mobile == "") {
    alert("Father Mobile number must be filled out");
    return false;
  }
  
  $.ajax({
    type: "POST",
    url: 'store.php',
    data: {name: name, gender:gender, standard:standard, dob:dob, age:age, father_name:father_name, mobile:mobile},
    success: function(data){
      console.log(data);
      if(data == 'success')
      {
        alert('Student Added Successfully !');
        window.location.reload();
      }
    },
    error: function(xhr, status, error){
      console.error(xhr);
    }
  });
}


</script>