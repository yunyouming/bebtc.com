<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
                <title>币易网_比特币兑换商店,买卖比特币从未如此简单-买比特币</title>
  
        <link rel="stylesheet" type="text/css" href="/Public/css/total.css">
        <link rel="stylesheet" type="text/css" href="/Public/css/mai.css">
        <link rel="stylesheet" type="text/css" href="/Public/css/email.css">
        <link rel="stylesheet" type="text/css" href="/Public/tubiao/demo.css">
        <link rel="stylesheet" type="text/css" href="/Public/tubiao/iconfont.css">
		 <script type="text/javascript">
			(function () {
						var user = null;
						window.getUser = function () {
					return user;
				};
			})();
		</script>
		<script src="/Public/js/jquery.min.js"></script>
		<script type="text/javascript"> function baseUrl() {return '/';}</script>
		<script type="text/javascript" src="/Public/js/libs.min.js"></script>


    </head>
        <body class="landing">
        <header id="site-header" >
            <nav id="site-nav">
                <h1 id="logo">
                <a id="smarticons" href="/">
                        <img class="yincang" src="/Public/images/logo.png" height="80px;">
                    </a>
                </h1>
               <ul class="site-links">
                        
                <li class=""><a href="/">首页</a></li>
                    <li><a href="<?php echo U('Buy/index');?>">买比特币</a></li>
                     <li><a href="<?php echo U('Sale/index');?>">卖比特币</a></li>
					 <li><a href="https://bitcoin.org/zh_CN/choose-your-wallet" target="_blank">钱包下载</a></li>
                     <li class=""><a href="<?php echo U('Index/wenti');?>">常见问题</a></li>
                      <li class="call-out"><a href="http://wpa.qq.com/msgrd?v=3&uin=2807183483&site=qq&menu=yes" target='blank' class="sign-in-trial callout">在线客服</a></li>
                </ul>
                <a id="trigger-overlay"><span>导航</span></a>
            </nav>
        </header>

<section class="intro">
   <div class="wrapper">
    <section class="intro-text">
                              <h2 class="yincang" style="visibility: visible; animation-name: fadeInDown;" class="wow fadeInDown">比特币兑换商店</h2>
                              <img class="logo" src="/Public/images/logo.png" height="80px;">
                              <p  class="yincang" style="visibility: visible; animation-name: fadeInDown;" class="wow fadeInDown">买卖比特币从未如此简单</p>
                              <div class="button-group">
                              <a style="visibility: visible; animation-delay: 200ms; animation-name: fadeInLeft;" href="<?php echo U('Buy/index');?>" data-wow-delay="200ms" class="cta button wow fadeInLeft">
                                    
                                           <i class="icon iconfont">&#xf0191;</i>
                                 <i class="icon iconfont">&#xe606;</i>
                                 <i class="icon iconfont">&#xe603;</i>
                                      
                                     买比特币
                                  </a>

                                  <a style="visibility: visible; animation-delay: 200ms; animation-name: fadeInRight;" href="<?php echo U('Sale/index');?>" data-wow-delay="200ms" class="cta button wow fadeInRight sign-in-trial">
                                  
                                          <i class="icon iconfont">&#xe603;</i>        
                                <i class="icon iconfont">&#xe606;</i>
                                <i class="icon iconfont">&#xf0191;</i>
                                    
                                      卖比特币
                                  </a>
                              </div>
                          </section>

    <section class="maijin email_a">
   
      <ul class="maijin_a">
        <li class="maijin_aa">
        <i class="icon iconfont">&#xf0191;</i>
        <i class="icon iconfont">&#xe606;</i>
        <i class="icon iconfont">&#xe603;</i></li>
       <li class="mbtb_a">交易信息已发送至您的邮箱，请点击邮件里的链接地址进行付款，因价格剧烈波动，订单需在10分钟内完成汇款，否则交易失败。 </li>
       <li  class="mbtb_a">邮箱内如果没有收到该邮件，请在垃圾邮件中找寻。</li>
       <li   class="mbtb_a" >验证码：<input class="yzm_input"  id="verify" type="text">
      <img  class="yzm_img" src="<?php echo U('Buy/Verify');?>">
      <a href="javascript:void(0);" id="code" class="kanbuqing">看不清</a> </li>
      <li><a class="cxtj" id="sub_btn" href="javascript:void(0);">重新发送</a></li>
      </ul>
<script>
$(function(){
$("#code").click(function(){
	$(".yzm_img").attr("src", "/Home/Buy/verify/"+Math.random());
});
$("#sub_btn").click(function(){
var checkcode =$.trim($("#verify").val());

var id = <?php echo ($num); ?>;
$.get('/Home/Buy/buyemail',
			{
				id:id,
				checkcode:checkcode
			},
			function(data){
			 
				if(data == 1){
				 alert("验证码错误！");
				 $("#code").click();
				 }else if(data == 2){
				 alert("验证码不能为空");
				 }else if(data == 3){
				 alert("超时，未在规定时间操作，请重新下单");
				  window.location.href="{Sale/index}";
				 }else if(data == 4){
				 alert("发送失败！");
				 }else if(data == 5){
				 alert("发送成功，请注意查收！");
				 $("#code").click();
				 
				 }
				}
	);

});

})
</script>

</section>

    </div>

</section>


<div class="overlay overlay-mega">
    <button type="button" class="overlay-close">Close</button>
    <nav>
    <ul>
        <li><a href="/" title="SmartIcons.co">首页</a></li>
        <li><a href="<?php echo U('Buy/index');?>">买比特币</a></li>
        <li><a href="<?php echo U('Sale/index');?>">卖比特币</a></li>
        <li><a href="<?php echo U('Index/wenti');?>">常见问题</a></li>
   
        <li class="call-out"><a href="http://wpa.qq.com/msgrd?v=3&uin=2807183483&site=qq&menu=yes" target='blank' class="sign-in-trial callout">在线客服</a></li>
        </ul>
    </nav>
</div>



    </body>
</html>