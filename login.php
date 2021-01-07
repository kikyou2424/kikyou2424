<?php
function login(){
    session_start();
    global $message;
  if(empty($_POST)){
      $message='请输入内容';
      return;
  }
  if(empty($_POST['username'])){
      $message='请输入用户名';
      return;
  }
  if(empty($_POST['password'])){
      $message='请输入密码';
      return;
  }
  $user=$_POST['username'];
  $pw=$_POST['password'];
  $conn=mysqli_connect('localhost','root','root','shop');
  $query=mysqli_query($conn,"select * from `user` where `username`='$user' and `password`='$pw'");
  $result=mysqli_fetch_assoc($query);
  
  $_SESSION['user_data']=$result;
  if(isset($result)){   
    var_dump($result);
    header('location:index.php'); 
    mysqli_close($conn);
}else{
    $message ='用户名或密码输入错误';
    mysqli_close($conn);
    return;
} 
}
if($_SERVER['REQUEST_METHOD']==='POST'){
    login();
}

function register(){

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/jquery1.12.4.min.js"></script>
</head>

<body>
    <!-- 头部 -->
    <div class="forum_header min-w1210">
        <div class="forum_header_content">
            <div class="sony-logo">
                <a href="./index.html"><img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/sony-logo.jpg" class="logo_img"></a>
            </div>
            <div class="header_ss">
                <div id="user_logout" class="userlogout" style="display: none;"><span class="logout_btn">登出</span></div>
                <div class="header_ss_c">
                    <ul>
                        <li><a href="#" target="_blank">售后服务</a></li>
                        <li><a href="#" target="_blank">索尼中国APP</a></li>
                        <li><a href="#" target="_blank">索尼应用中心</a></li>
                        <li><a href="#" target="_blank">线下体验及购买</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mySony">
            <div class="logo_box">
                <a href="#"><img src="https://www.sonystyle.com.cn/content/dam/sonyclub/mysony/club_logo.jpg" style="float: left;"></a>
                <div class="headernav">
                    <ul>
                        <li><a href="#"><span class="nav_text"> 影像版块</span></a></li>
                        <li><a href="#"><span class="nav_text"> <span style="float: left; color: rgb(226, 226, 226);">/</span>音频版块</span></a></li>
                        <li><a href="#"><span class="nav_text"> <span style="float: left; color: rgb(226, 226, 226);">/</span>电视版块</span></a></li>
                        <li><a href="#"><span class="nav_text"> <span style="float: left; color: rgb(226, 226, 226);">/</span>手机版块</span></a></li>
                        <li><a href="#"><span class="nav_text"> <span style="float: left; color: rgb(226, 226, 226);">/</span>畅索欲言</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 主体 -->
    <div class="main min-w1210">
        <div>
            <img src="https://www.sonystyle.com.cn/app/images/kv_1920.jpg" alt="">
            <div class="login">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method='post'>
                    <h3>登录</h3>
                    <input type="text" id="username" placeholder="邮箱、用户名、手机号" name='username'>
                    <input type="password" placeholder="密码" name='password'>
                     <!-- 有错误信息时展示 -->
                    <?php if(isset($message)):?>
                    <div class="message"> <span>登录失败&nbsp;</span> <?php echo $message?>  </div>                
                    <?php endif?>
                    <button>登录</button>
                    <ul>
                        <li>
                            <a href="javascript:void(0)" id="reg">注册</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">忘记密码</a>
                        </li>
                    </ul>
                </form>
                <div></div>
            </div>
            <div class="register">
                <form action="">
                    <h3>注册</h3>
                    <input type="text" id="username" placeholder="请设置邮箱、用户名、手机号"><br>
                    <input type="password" placeholder="请设置密码"><br>
                    <input type="password" placeholder="再次确认密码"><br>
                    <button>注册</button>
                    <br>
                    <a href="javascript:void(0)" id="log">返回登录</a>
                </form>
            </div>
            <script>
                $('#reg').on('click', function() {
                    $('.register').css('display', 'block');
                })
                $('#log').on('click', function() {
                    $('.register').css('display', 'none');
                })
            </script>
        </div>
        <img src="https://www.sonystyle.com.cn/app/images/nwico.jpg" alt="">
        <div style="margin:0 auto; width: 1440px;">
            <img src="https://www.sonystyle.com.cn/app/images/fetlist1.jpg" alt="">
            <img src="https://www.sonystyle.com.cn/app/images/fetlist2.jpg" alt="">
            <img src="https://www.sonystyle.com.cn/app/images/fetlist4.jpg" alt="">
            <img src="https://www.sonystyle.com.cn/app/images/fetlist3.jpg" alt="">
        </div>
        <div style="background: #f3f3f3;">
            <div style="margin:0 auto; width: 1440px;background: #f3f3f3;">
                <img src="https://www.sonystyle.com.cn/app/images/kvbar_bgnew.jpg" alt="">
            </div>
        </div>
        <div style="background:url(./images/cart1.png) no-repeat center top;min-width: 1210px;height: 259px;"></div>
        <!-- foot 底部模块 start -->
        <div id="foot">
            <div class="foot inner">
                <div class="foot-top">
                    <ul>
                        <li><a href="#">正品保障</a></li>
                        <li><a href="#">专业售前</a></li>
                        <li><a href="#">便捷配送</a></li>
                        <li><a href="#">无忧退换</a></li>
                        <li><a href="#">优质售后</a></li>
                        <li><a href="#">一站购物</a></li>
                        <li><a href="#">会员尊享</a></li>
                        <li><a href="#">增值服务</a></li>
                    </ul>
                </div>
                <div class="foot-center clearfix">
                    <div class="foot-c1">
                        <a href="#" style="margin-top: 0px;">Sony Store 直营店</a>
                        <p>你周围的经销商</p>
                        <a style="margin-bottom:15px;" href="#">就近门店查询</a>
                        <a href="#">就近维修站查询</a>
                    </div>
                    <div class="foot-c2">
                        <p>关注我们</p>
                        <div class="wx-wrap">
                            <div class="wx-box">
                                <a class="wx-btn" href="#" rel="nofollow">索尼（中国）官方微博</a>
                            </div>
                            <div class="wx-box">
                                <a class="wx-btn" href="#" rel="nofollow">索尼（中国）官方微信</a>
                            </div>
                        </div>
                        <a class="phone-client icon-tel" href="#">手机客户端</a>
                        <a class="icon-tel" href="#">在线服务</a>
                    </div>
                    <ul class="server-support clearfix">
                        <li>
                            <p>如何订购</p>
                            <ul class="support-list">
                                <li><a target="_blank" href="#">在线订购指南</a></li>
                                <li><a target="_blank" href="#">销售条款</a></li>
                                <li><a target="_blank" href="#">付款方式</a></li>
                                <li><a target="_blank" href="#">货物配送</a></li>
                                <li><a target="_blank" href="#">收货流程</a></li>
                                <li><a target="_blank" href="#">退货流程</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>会员天地</p>
                            <ul class="support-list">
                                <li><a target="_blank" href="#">我的索尼</a></li>
                                <li><a target="_blank" href="#">最新动态</a></li>
                                <li><a target="_blank" href="#">产品注册</a></li>
                                <li><a target="_blank" href="#">My Sony学院</a></li>
                                <li><a target="_blank" href="#">会员权益</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>服务与支持</p>
                            <ul class="support-list">
                                <li><a target="_blank" href="#">产品说明书</a></li>
                                <li><a target="_blank" href="#">驱动程序检索</a></li>
                                <li><a target="_blank" href="#">常见问题</a></li>
                                <li><a target="_blank" href="#">保修条款</a></li>
                                <li><a target="_blank" href="#">维修网络查询</a></li>
                                <li><a target="_blank" href="#">索尼手机客户服务</a></li>
                                <li><a target="_blank" href="#">服务动态</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>相关链接</p>
                            <ul class="support-list">
                                <li><a href="#">在线直播</a></li>
                                <li><a href="#">应用中心</a></li>
                                <li><a href="#">视频教程中心</a></li>
                                <li><a href="#">行业解决方案</a></li>
                                <li><a href="#">新闻中心</a></li>
                                <li><a href="#">影像产品正品认证</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="foot-bottom">
                    <div class="copy-top clearfix">
                        <a href="">索尼中国首页</a>
                        <a href="">联系我们</a>
                        <a href="" rel="nofollow">责任声明</a>
                        <a href="" rel="nofollow">营业执照</a>
                        <a href="" rel="nofollow">索尼隐私政策</a>
                        <span class="fr">2021索尼（中国）有限公司 版权所有</span>
                    </div>
                    <div class="ft-copy-btm clearfix">
                        <span>本网站包含推销产品或服务的广告</span>
                        <span><a href="" target="_blank">京ICP备05036958号</a></span>

                        <span><a href="" target="blank" class="copy-icon" rel="nofollow">京公网安备 11010502031585号</a></span>
                        <span style="margin-left:27px"><a href="" target="blank" rel="nofollow"> 诚信网站认证 </a></span>
                        <span class="fr">您访问本网站将会被监控，请点击<a id="goDeclare" href="javascript:;">此处</a>获得详细信息 </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- foot 底部模块 end -->

    </div>
</body>

</html>