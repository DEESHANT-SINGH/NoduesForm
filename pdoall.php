<?php
include 'pdodbcon.php';
$rollno="";
$grno="";
$id="";
$name="";
$number="";
$email="";
$filename="";
$subject1="";
$subject2="";
$subject3="";
$subject4="";
$subject5="";
$subject6="";
$process="";

if(isset($_POST['search'])){
    $id=$_POST['id'];
    $pdoQuery="SELECT * FROM student WHERE id=:id ";
    $pdoQuery_run=$pdodbcon->prepare($pdoQuery);
    $pdoQuery_exec=$pdoQuery_run->execute(array(":id"=>$id));

    if($pdoQuery_exec){
        if($pdoQuery_run->rowcount()>0)
        {
            foreach($pdoQuery_run as $row)
            {
                $rollno=$row->rollno;
                $grno=$row->grno;
                $id=$row->id;
                $name=$row->name;
                $number=$row->number;
                $email=$row->email;
                $filename=$row->filename;
                $subject1=$row->subject1;
                $subject2=$row->subject2;
                $subject3=$row->subject3;
                $subject4=$row->subject4;
                $subject5=$row->subject5;
                $subject6=$row->subject6;
                
            }
        }
        else
        {
            echo '<script>alert("No Data Found")</script>';
        }
    }
    else{
        echo '<script>alert("DATA not Search")</script>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Data</title>
    <link rel="stylesheet" href="style/pdoall.css">
</head>
<body>
    <center>
<h1>MANIPULATE THE STUDENT DATA</h1>
<form action="" method="post">
    <table style="background-color:#2d2d86; border-radius:10px;" width="50%"  cellpadding="5" cellspacing="5" >
        <tr>
            <td>
                <center>
                    <p style="color:white">SEARCH DATA BY ID</p><input type="text" name="id" value="<?php echo $id; ?>" placeholder="Enter ID"><br><br>
                    <input type="text" name="rollno"  value="<?php echo $rollno; ?>" placeholder="Enter ROLLNO"/><br><br>
                    <input type="text" name="grno"  value="<?php echo $grno; ?>" placeholder="Enter GRNO"/><br><br>
                    <input type="text" name="name"  value="<?php echo $name; ?>" placeholder="Enter Name"/><br><br>
                    <input type="number" name="number" value="<?php echo $number; ?>" placeholder="Enter Number"/><br><br>
                    <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Email ID"/><br><br>
                    <input type="text" name="filename" value="<?php echo $filename; ?>" placeholder="Enter Filename"/><br><br>
                    <input type="text" name="subject1" value="<?php echo $subject1; ?>" placeholder="Enter Subject1"/><br><br>
                    <input type="text" name="subject2" value="<?php echo $subject2; ?>" placeholder="Enter Subject2"/><br><br>
                    <input type="text" name="subject3" value="<?php echo $subject3; ?>" placeholder="Enter Subject3"/><br><br>
                    <input type="text" name="subject4" value="<?php echo $subject4; ?>" placeholder="Enter Subject4"/><br><br>
                    <input type="text" name="subject5" value="<?php echo $subject5; ?>" placeholder="Enter Subject5"/><br><br>
                    <input type="text" name="subject6" value="<?php echo $subject6; ?>" placeholder="Enter Subject6"/><br><br>
                    <label class="container" name="process" value="APPROVED">APPROVED
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container" name="process" value="DIS-APPROVED">DIS-APPROVED
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label> 
                    <button id="one" type="submit" name="display" >DISPLAY</button>
                    <button id="one" type="submit" name="search" >SEARCH DATA</button>
                    <button id="one" type="submit" name="update" >UPDATE DATA</button>
                    <button id="one"  type="submit" name="delete" >DELETE DATA</button>
                    <div>
                    </div>
                </center><br><br>
            </td>
        </tr>
    </table>
</form>
</center>


</body>
</html>




<?php
include 'pdodbcon.php';
if(isset($_POST['delete']))
{
$id=$_POST['id'];

$pdoQuery="DELETE FROM student WHERE id=:id";
$pdoQuery_run=$pdodbcon->prepare($pdoQuery);
$pdoQuery_exec=$pdoQuery_run->execute(array(":id"=>$id));

if($pdoQuery_exec){
echo '<script>alert("DATA DELETED")</script>';
}
else{
    echo '<script>alert("DATA  NOT DELETED")</script>';
}
}

?>







<?php

//Update the student table

include 'pdodbcon.php';
if(isset($_POST['update']))
{
    
    $rollno=$_POST['rollno'];
    $grno=$_POST['grno'];
    $id=$_POST['id'];
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $filename=$_POST['filename'];
    $subject1=$_POST['subject1'];
    $subject2=$_POST['subject2'];
    $subject3=$_POST['subject3'];
    $subject4=$_POST['subject4'];
    $subject5=$_POST['subject5'];
    $subject6=$_POST['subject6'];
    $process=$_POST['process'];


    $pdoQuery="UPDATE student SET  rollno=:rollno,grno=:grno,name=:name,number=:number,email=:email,filename=:filename,subject1=:subject1,subject2=:subject2,subject3=:subject3,subject4=:subject4,subject5=:subject5,subject6=:subject6,process=:process WHERE id=:id"; // updated by id
    $pdoQuery_run=$pdodbcon->prepare($pdoQuery);
    $pdoQuery_exec = $pdoQuery_run->execute(array(":rollno"=>$rollno,":grno"=>$grno,":name"=>$name,":number"=>$number,":email"=>$email,":filename"=>$filename,":subject1"=>$subject1,":subject2"=>$subject2,":subject3"=>$subject3,":subject4"=>$subject4,":subject5"=>$subject5,":subject6"=>$subject6,":process"=>$process,":id"=>$id));
    
    if($pdoQuery_exec){
        echo '<script>alert("Data Updated")</script>';
    }
    else{
        echo '<script>alert("Data NOT Updated")</script>';
    }
}

?>

<center>
    <br>
    <br>
    
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


