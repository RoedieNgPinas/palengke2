<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

$con=new mysqli('localhost','root','form')
;
if($con){
    //echo "Registration Successful";
    $sql="insert into 'Buyer_registration_data' (username,email,password)values('$username','$email','$password')";
    $result=mysqli_query($con,$sql);
    fi($result){
        //echo "Data inserted succesfully";
    }else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}
}
?>