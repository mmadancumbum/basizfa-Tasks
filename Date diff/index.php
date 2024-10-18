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
<h4><b>Show a Date Difference:</b></h4><br>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
  <label for="date1">Date 1:</label>
  <input type="date" id="date1" name="date1"><br><br>
  <label for="date2">Date 1:</label>
  <input type="date" id="date2" name="date2"><br><br>
  <input type="submit" style="margin-left:70px" class="btn btn-primary">
</form>

<p style="padding-top:20px;font-size:17px">Difference between two dates:</p>
<p style="margin-left:20px"><span id="days"> </span> Days</p>
<p style="margin-left:20px"><span id="days_in_word"> </span> Days</p>

</div>
</body>
</html>

<?php

    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    function dateDiffUsingDateTime($date1, $date2) {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);

        $interval = $datetime1->diff($datetime2);

        return $interval->days;
    }

    $dateDiff = dateDiffUsingDateTime($date1, $date2);
?>

    <script>
        document.getElementById("days").innerHTML = <?php echo $dateDiff ?>

        var a = ['','one ','two ','three ','four ', 'five ','six ','seven ','eight ','nine ','ten ','eleven ','twelve ','thirteen ','fourteen ','fifteen ','sixteen ','seventeen ','eighteen ','nineteen '];
        var b = ['', '', 'twenty','thirty','forty','fifty', 'sixty','seventy','eighty','ninety'];

        function inWords (num) {
            if ((num = num.toString()).length > 9) return 'overflow';
            n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
            if (!n) return; var str = '';
            str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
            str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
            str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
            str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
            str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'days ' : '';
            return str;
        }

        document.getElementById('days_in_word').innerHTML = inWords(<?php echo $dateDiff ?>);
        
    </script>
