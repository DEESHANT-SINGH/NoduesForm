
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Student Data</title>
  <link rel="stylesheet" href="style/display.css">
</head>
<body>
<center>
<h1>DISPLAY THE STUDENT DATA</h1>
<form action="" method="post">
    <table  width="50%" border="1" style="background-color:rgb(255, 80, 80); "  cellpadding="7" cellspacing="50">
        <tr>
            <td>
                <center>
                         <button class="rainbow rainbow-5" type="submit" name="display" >DISPLAY DATA</button>
                      </center><br><br>
            </td>
        </tr>
    </table>
</form>
</center>  
</body>
</html>
<br>

<center>
<?php
include 'pdodbcon.php';

if(isset($_POST['display']))
{
$pdoQuery="SELECT * FROM student";
$pdoQuery_run=$pdodbcon->query($pdoQuery);
if($pdoQuery_run){
    echo'<table width="50%" border="1" cellpadding="5" ceellspacing="5">
    <tr style="color:blue;">
    <td>ROLL NO</td>
    <td>GR.NO</td>
    <td>ID</td>
    <td>NAME</td>
    <td>NUMBER</td>
    <td>Email ID</td>
    <td>FEE RECEIPT NO.</td>
    <td>SUBJECT 1</td>
    <td>SUBJECT 2</td>
    <td>SUBJECT 3</td>
    <td>SUBJECT 4</td>
    <td>SUBJECT 5</td>
    <td>SUBJECT 6</td>
    <td>NODUES STATUS</td>
    </tr>
    ';
    while($row =$pdoQuery_run->fetch())
    {
    echo '<tr>
    <th>'.$row->rollno.'</th>
    <th>'.$row->grno.'</th>
    <th>'.$row->id.'</th>
    <th>'.$row->name.'</th>
    <th>'.$row->number.'</th>
    <th>'.$row->email.'</th>
    <th>'.$row->filename.'</th>
    <th>'.$row->subject1.'</th>
    <th>'.$row->subject2.'</th>
    <th>'.$row->subject3.'</th>
    <th>'.$row->subject4.'</th>
    <th>'.$row->subject5.'</th>
    <th>'.$row->subject6.'</th>
    <th>'.$row->process.'</th>
    </tr>
    ';
    }
    echo '</table>';
}
else{
    echo '<script>alert(No Record / Data Found)</script>';
}
}
?>
</center>