<?php
//insert for Teachers Details//
include 'pdodbcon.php';
if(isset($_POST['insert']))
{

    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
  
  
    $query = $pdodbcon->prepare('SELECT * FROM pdodemodata WHERE email = :email');
    $query->bindParam(':email', $email);
    $query->execute();


    if($query->rowCount()==0){
    $pdoQuery="INSERT INTO pdodemodata(`name`,`number`,`email`) VALUES (:name,:number,:email)";
    $pdoQuery_run=$pdodbcon->prepare($pdoQuery);
    $pdoQuery_exec=$pdoQuery_run->execute(array(":name"=>$name,":number"=>$number,":email"=>$email));

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