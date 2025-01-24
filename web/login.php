<?php 

$host="localhost";
$user="root";
$password="";
$db="test";

$conn = new mysqli('localhost','root','','test');
if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from registration where user='".$username."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql, $conn );
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        
    }
    else{
        echo " You Have Entered Incorrect Password";
        
    }
        
}
?>