<!DOCTYPE html>
<html>
<head>
  <title>Students Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    div {
    width: 500px;
    height: 330px;
    background-color: #d7dbdb;
    
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    
    margin: auto;
    padding-left:130px;
    padding-top:20px;
    padding-bottom:20px;
}
  </style>

</head> 
<body>

<div>
<h4><b>Find Triplet:</b></h4><br>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
  <label for="target_no">Target Triplet SUM:</label>
  <input type="number" id="target_no" name="target_no"><br><br>
  <input type="submit" style="margin-left:70px" class="btn btn-primary">
</form>

<p style="padding-top:20px;font-size:17px">Triplet:</p>
<p style="margin-left:20px" id="res"></p>

</div>
</body>
</html>


<script>

  
const arr = [ 12, 3, 4, 1, 6, 9 ];
const sum = <?php echo $_POST['target_no'] ?>;
// alert(sum);

find3Numbers(arr, sum);

function find3Numbers(arr, sum)
{
    let n = arr.length;

    for (let i = 0; i < n - 2; i++) {

        for (let j = i + 1; j < n - 1; j++) {

            for (let k = j + 1; k < n; k++) {

                if (arr[i] + arr[j] + arr[k] === sum) {

                    console.log(`Triplet is ${arr[i]}, ${
                        arr[j]}, ${arr[k]}`);

                    document.getElementById('res').innerHTML = `Triplet is ${arr[i]}, ${arr[j]}, ${arr[k]}`;
                    return true;
                }
            }
        }
    }

    document.getElementById('res').innerHTML = "No Triplet found";
    return false;
}



</script>