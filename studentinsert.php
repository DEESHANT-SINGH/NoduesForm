<?php
//insert for Student Details//
include 'pdodbcon.php';
if(isset($_POST['studentinsert']))
{
    $rollno=$_POST['rollno'];
    $grno=$_POST['grno'];
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

    $query = $pdodbcon->prepare('SELECT * FROM student WHERE email = :email');
    $query->bindParam(':email', $email);
    $query->execute();
    
    if($query->rowCount()==0){
    $pdoQuery="INSERT INTO student(`rollno`,`grno`,`name`,`number`,`email`,`filename`,`subject1`,`subject2`,`subject3`,`subject4`,`subject5`,`subject6`) VALUES (:rollno,:grno,:name,:number,:email,:filename,:subject1,:subject2,:subject3,:subject4,:subject5,:subject6)";
    $pdoQuery_run=$pdodbcon->prepare($pdoQuery);
    $pdoQuery_exec=$pdoQuery_run->execute(array(":rollno"=>$rollno,":grno"=>$grno,":name"=>$name,":number"=>$number,":email"=>$email,":filename"=>$filename,":subject1"=>$subject1,":subject2"=>$subject2,":subject3"=>$subject3,":subject4"=>$subject4,":subject5"=>$subject5,":subject6"=>$subject6));

    if($pdoQuery_exec){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert ('Data Insert in PHP PDO')
        window.location.href='index.html';
        </script>");
    }
    else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data is not Insert in PHP PDO');
        window.location.href='index.html';
        </script>");
    }
}
else { 
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Email Already Exist');
    window.location.href='index.html';
    </script>");
  } 
 

}

?>