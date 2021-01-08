<?php
require('./model/_connect.php');
// echo 'hhh';
// header("location:../login.php");
//获取前端的参数
$name = $_POST["username1"];
$pw = $_POST["password1"];
$sql = "SELECT * FROM user WHERE username = '$name'";
$result = mysqli_query($conn,$sql);
// var_dump($result);
$num = mysqli_num_rows($result); 
if($num>0){
    //用户名存在
    header('location:../login.php?falg=false');  
}else{
    //用户名不存在
    $sql_insert = "insert into user(username,password) values('$name','$pw')";
    //插入数据
    $ret = mysqli_query($conn,$sql_insert);
    $row = mysqli_fetch_array($ret); 
    header('location:../login.php?falg=true');

}
?>