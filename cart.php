<?php
session_start();
if(empty($_SESSION['user_data'])){
    header('location:login.php');
}
    $user=$_SESSION['user_data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./favicon.ico">
    <title>我的购物车</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/cart.css">
    <script src="./js/jquery1.12.4.min.js"></script>
</head>

<body>
    <!-- head头部导航栏开始 -->
    <div class="header">
        <div class="head inner">
            <!-- logo -->
            <div class="logo">
                <a href="./index.html">索尼中国</a>
            </div>
            <!-- nav -->
            <div class="nav">
                <ul class="clearfix">
                    <li>
                        <a href="">My Sony</a>
                        <ol class="clearfix">
                            <li><a href="#" target="_blank">My Sony 社区</a></li>
                            <li><a href="#" target="_blank">我的账户</a></li>
                            <li><a href="#" target="_blank">我的订单</a></li>
                            <li><a href="#" target="_blank">我的心愿单</a></li>
                            <li><a href="#" target="_blank">产品注册</a></li>
                            <li><a href="#" target="_blank">会员福利</a></li>
                            <li><a href="#" target="_blank">α Café</a></li>
                        </ol>
                    </li>
                    <li>
                        <a href="">服务与支持</a>
                        <ol class="clearfix">
                            <li><a href="#" target="_blank">在线客服</a></li>
                            <li><a href="#" target="_blank">在线直播</a></li>
                            <li><a href="#" target="_blank">售后服务</a></li>
                            <li><a href="#" target="_blank">索尼中国APP</a></li>
                            <li><a href="#" target="_blank">索尼应用中心</a></li>
                            <li><a href="#" target="_blank">线下体验及购买</a></li>
                            <li><a href="#" target="_blank">影像专业服务</a></li>
                        </ol>
                    </li>
                    <!-- 网页导航 -->
                    <li>
                        <a href="">网站导航</a>
                        <div id="moreNav">
                            <dl>
                                <dt>家庭影像产品</dt>
                                <dd><a href="#">BRAVIA电视机</a></dd>
                                <dd><a href="#">4K/2K播放器</a></dd>
                                <dd><a href="#">家庭影音系统</a></dd>
                                <dt> PlayStation®</dt>
                                <dd><a href="#">PlayStation®VR</a></dd>
                                <dd><a href="#">PlayStationshangVR</a></dd>
                                <dd><a href="#">PlayStation®4</a></dd>
                                <dd><a href="#">ProPlayStation®4</a></dd>
                                <dd><a href="#">PlayStation®4游戏</a></dd>
                                <dd><a href="#">PlayStation@Vita</a></dd>
                                <dd><a href="#">PlayStation®</a></dd>
                                <dd><a href="#">Vita®游戏</a></dd>
                            </dl>
                            <dl>
                                <dt>数码影像产品</dt>
                                <dd><a href="#">数码影像产品</a></dd>
                                <dd><a href="#">镜头</a></dd>
                                <dd><a href="#">数码相机</a></dd>
                                <dd><a href="#">数码摄像机</a></dd>
                                <dd><a href="#">运动相机</a></dd>
                                <dd><a href="#">索尼存储卡</a></dd>
                                <dd><a href="#">影像专业服务</a></dd>
                            </dl>
                            <dl>
                                <dt>便携音频产品</dt>
                                <dd><a href="#">耳机</a></dd>
                                <dd><a href="#">MP4/MP3播放器</a></dd>
                                <dd><a href="#">无线扬声器</a></dd>
                                <dd><a href="#">无数码录音棒</a></dd>
                                <dt> 家庭音频设备</dt>
                                <dd><a href="#">家庭音频系统</a></dd>
                                <dd><a href="#">高保真音响组件</a></dd>
                                <dd><a href="#">无线扬声器</a></dd>
                                <dd><a href="#">高解析度音频设备</a></dd>
                            </dl>
                            <dl>
                                <dt>潮玩科技</dt>
                                <dd><a href="#">Xperia™智能手机</a></dd>
                                <dd><a href="#">便携式投影仪</a></dd>
                                <dd><a href="#">KOOV®教育机器人</a></dd>
                                <dd><a href="#">电子纸</a></dd>
                                <dd><a href="#">电子纸配件</a></dd>
                            </dl>
                            <dl>
                                <dt>数码配件</dt>
                                <dd><a href="#">数码配件首页</a></dd>
                                <dd><a href="#">PlayStation®配件</a></dd>
                                <dd><a href="#">数码摄像机配件</a></dd>
                                <dd><a href="#">数码相机配件</a></dd>
                                <dd><a href="#">微单™数码相机配件</a></dd>
                                <dd><a href="#">运动相机配件</a></dd>
                                <dd><a href="#">音频产品配件</a></dd>
                                <dd><a href="">Xperia™手机配件</a></dd>
                                <dt><a href="">行业解决方案</a></dt>
                                <dt><a href="">在线直播</a></dt>
                            </dl>
                            <dl>
                                <dt>在线购物指南</dt>
                                <dd><a href="#">购物指南</a></dd>
                                <dd><a href="#">销售条款</a></dd>
                                <dd><a href="#">货物配送</a></dd>
                                <dd><a href="#">收货流程</a></dd>
                                <dd><a href="#">付款方式</a></dd>
                                <dd><a href="#">退货流程</a></dd>
                                <dt>服务与支持</dt>
                                <dd><a href="#">产品说明书</a></dd>
                                <dd><a href="#">常见问题</a></dd>
                                <dd><a href="#">保修条款</a></dd>
                            </dl>
                            <dl>
                                <dt>你周围的经销商</dt>
                                <dd><a href="#">门店查找</a></dd>
                                <dd><a href="#">维修网络查询</a></dd>
                                <dt>My Sony Club</dt>
                                <dd><a href="#">My Sony社区</a></dd>
                                <dd><a href="#">会员福利</a></dd>
                                <dd><a href="#">产品注册</a></dd>
                                <dd><a href="#"> 会员注册</a></dd>
                                <dd><a href=""> a Cafée</a></dd>
                                <dd><a href="">会员帮助中心</a></dd>
                            </dl>
                            <div>
                                <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/phoneImg.jpg" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="search">
                        <input type="text">
                        <button id="search_btn"></button>
                    </li>
                </ul>
            </div>
            <!-- 登录/注册 -->
            <div class="login">
                <?php if(empty($user)):?>
                <a href="javascript:">登入</a> &nbsp;/&nbsp;
                <a href="javascript:">注册</a>
                <?php else:?>
                    <a href="#"><?php echo $user['username']?></a>
                <?php endif?>
            </div>
            <!-- 购物车 start -->
            <div class="minicart">
                <div>
                    <div id="cart">
                        <ul></ul>
                        <div class="summary">
                            <p>总计: RMB<span>0.00</span></p>
                        </div>
                        <div class="gotobasket">
                            <a href="#">去购物车(0)</a>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <!-- 官网直售 -->
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- head头部导航栏结束 -->
    <!-- main start -->
    <div class="shop_cont min-w1210">
        <!-- 广告条 start -->
        <div class="bso inner">
            <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/shopcart/cart_banner.jpg" alt="">
        </div>
        <!-- 广告条 end -->

        <!-- 购物车条 start-->
        <div class="cart_top inner">
            <p class="c_title">我的购物车</p>
        </div>
        <div style="height: 87px;border-bottom: 3px solid #ccc" class="inner">

        </div>
        <!-- 购物车条 end-->
        <div class="shop_i_t clearfix inner">
            <div class="sp_name">商品信息</div>
            <div class="sp_price">单价</div>
            <div class="sp_num">数量</div>
            <div class="sp_total">小计</div>
            <div class="sp_opera">操作</div>
        </div>
        <!-- 购物车无商品时主体 start-->
        <div class="shop_no">
            <div class="no_img"><img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/no.png"></div>
            <div class="no_tips">您的购物车无商品，快去看看心仪的商品吧</div>
            <div class="no_intro"><a href="./index.html" target="_blank">去逛逛</a></div>
        </div>
        <!-- 购物车无商品时主体 start-->

        <!-- 购物车商品 start-->
        <div class="shop_con inner">
            <div class="shop_item">
                <div>
                    <div class="cart_name">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/img_xp_1m2_g_2.jpg" alt="">
                        <span>索尼 Xperia 1 II 5G 手机 青山绿 鬼灭之刃(绿)限定套装</span>
                    </div>
                    <div class="c_price">RMB 7,499.00</div>
                    <div class="num_m">
                        <div class="reduce">-</div>
                        <span class="num_p">
                            <label for="product_count"></label> 
                            <input type="text" id="product_count" value="1">
                        </span>
                        <div class="add">+</div>
                    </div>
                    <div class="cart_total">RMB 7,499.00</div>
                    <div class="cart_opera">
                        <a href="javascript:void(0)" class="topool">移入心愿单</a>
                        <a href="javascript:void(0)" class="cp_del">删除</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 购物车商品 start-->
    </div>
    <!-- 购物车结算栏 start -->
    <div class="shop_total">
        <div class="spt">
            <div class="spt_c"></div>
            <div class="spt_con">
                <a href="javascript:void(0)" class="tobug">去结算(<span>2</span>)</a>
                <div class="spt_p_con">
                    <div class="spt_p_t">总价：RMB 12,798.00</div>
                </div>
            </div>
        </div>
    </div>
    <!-- 购物车结算栏 end -->

    </div>
    <!-- main end -->
    <div style="background:url(./images/cart2.png) no-repeat center top;min-width: 1210px;height: 564px;"></div>
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

</body>

</html>