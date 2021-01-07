<?php
require_once '../config.php';
session_start();
function login(){
  global $error_message;
  //接受并校验
  //持久化
  //响应
  if(empty($_POST['email'])){
     $error_message='请输入邮箱';
     return;
  }
  if(empty($_POST['password'])){
    $error_message='请输入密码';
    return;
  }
  $email=$_POST['email'];
  $password=$_POST['password'];
  $connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  if(!$connection){
    exit('未连接数据库');
  }
  $query=mysqli_query($connection,"select * from users where email='{$email}'");
  if(!$query){
    return;
  }  
 $data=mysqli_fetch_assoc($query);
if($data['email']!=$email){
  $error_message='用户名或者密码错误';
  return;
}  echo '哈哈';
if($data['password']!=$password){
  $error_message='用户名或者密码错误';
  return;
}
  //=====
  $_SESSION['users_login_data']=$data;
  header('location:index.php');
}

if($_SERVER['REQUEST_METHOD']==='POST'){
  login();
}
//退出功能
if($_SERVER['REQUEST_METHOD']=='GET'){
  if(isset($_GET['action'])&&$_GET['action']=='exit'){
    unset($_SESSION['users_login_data']);
  }
}
?>



<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Sign in &laquo; Admin</title>
  <link rel="stylesheet" href="/static/assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/static/assets/css/admin.css">
  <link rel="stylesheet" href="/static/assets/vendors/animate/animate.css">
</head>
<body>
  <div class="login">
    <form class="login-wrap <?php echo isset($error_message)?'shake animated':''?>" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" novalidate autocomplete="off">
      <img class="avatar" src="/static/assets/img/default.png">
      <!-- 有错误信息时展示 -->
      <?php if(isset($error_message)):?>
      <div class="alert alert-danger">
        <strong>错误！</strong> <?php echo $error_message?>
      </div>
      <?php endif?>
      <div class="form-group">
        <label for="email" class="sr-only">邮箱</label>
        <input id="email" type="email" name='email' class="form-control" placeholder="邮箱" autofocus value="">
      </div>
      <div class="form-group">
        <label for="password" class="sr-only">密码</label>
        <input id="password" name='password' type="password" class="form-control" placeholder="密码">
      </div>
      <button class="btn btn-primary btn-block">登 录</button>
    </form>
  </div>
</body>
<script src="/static/assets/vendors/jquery/jquery.js"></script>
<script>
$(function($){
  //验证email，然后在合适的时机发送ajax请求，将email传入
  var emailFormat=/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/;
  $('#email').on('blur',function(){
    var value=$(this).val();
    if(!value || !emailFormat.test(value)) return
    $.get('/admin/api/avatar.php',{email:value},function(res){
        $(".avatar").fadeOut().on('load',function(){
           $(this).fadeIn();
        }).attr('src',res);
    })
  })
})
</script>
<!-- <script>
    $(function ($) {
      // 1. 单独作用域
      // 2. 确保页面加载过后执行

      // 目标：在用户输入自己的邮箱过后，页面上展示这个邮箱对应的头像
      // 实现：
      // - 时机：邮箱文本框失去焦点，并且能够拿到文本框中填写的邮箱时
      // - 事情：获取这个文本框中填写的邮箱对应的头像地址，展示到上面的 img 元素上

      var emailFormat = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/

      $('#email').on('blur', function () {
        var value = $(this).val()
        // 忽略掉文本框为空或者不是一个邮箱
        if (!value || !emailFormat.test(value)) return

        // 用户输入了一个合理的邮箱地址
        // 获取这个邮箱对应的头像地址
        // 因为客户端的 JS 无法直接操作数据库，应该通过 JS 发送 AJAX 请求 告诉服务端的某个接口，
        // 让这个接口帮助客户端获取头像地址

        $.get('/admin/api/avatar.php', { email: value }, function (res) {
          // 希望 res => 这个邮箱对应的头像地址
          if (!res) return
          // 展示到上面的 img 元素上
          // $('.avatar').fadeOut().attr('src', res).fadeIn()
          $('.avatar').fadeOut(function () {
            // 等到 淡出完成
            $(this).on('load', function () {
              // 图片完全加载成功过后
              $(this).fadeIn()
            }).attr('src', res)
          })
        })
      })
    })
  </script> -->

</html>
