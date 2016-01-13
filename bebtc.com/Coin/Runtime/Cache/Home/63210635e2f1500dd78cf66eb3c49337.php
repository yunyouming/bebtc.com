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

    <section class="maijin ">
   
      <ul class="maijin_a">
            <li class="maijin_aa"><i class="icon iconfont">&#xf0191;</i>
                              <i class="icon iconfont">&#xe606;</i>
                              <i class="icon iconfont">&#xe603;</i>
            </li>
            <li class="maijin_bb maijin_bbb"> 实时价格：<span id="buypice"></span></li>
            <li  class="maijin_bb maijin_bbb">购买数量：<input class="mai_inputt" id="shuliang" type="text"></li>
            <li class="maijin_bb maijin_bbb maijin_bbb maijin_bbb">成交总价：<span id="total"></span></li>
            <li class="maijin_bb maijin_bbb maijin_bbb">邮箱地址：<input class="mai_input" id="email" type="text"> </li>
            <li class="maijin_bb maijin_bbb">收币地址：<input class="mai_input"   type="text" id="add"> </li>
           <li class="yanzhengma maijin_bb" >验证码：<input class="yzm_input" id="verify" type="text"><img  class="yzm_img" src="<?php echo U('Verify');?>">
			<a href="javascript:void(0);" id="code" class="kanbuqing">看不清</a></li>
            <li><input class="tijiao" type="button" id="sub_btn" value="提交"></li>
<script>
 //调用实时价格
$(function(){
$.extend($.fn,{
	 newslist:function(){
	 $.ajax
	    ({
	        type: "POST",
	        url: "<?php echo U('Buy/buypice');?>",
	        dataType: "json",
	        jsonpCallback:"success",
	        success:function(data){
					var data = $.parseJSON(data);
					 if(data!=0){
					   var pice = ((data * "<?php echo (C("BUYPICE")); ?>")/100).toFixed(2);
					   
						$("#buypice").html(pice);
						var zz = $.trim($("#shuliang").val());
						if(zz){$("#shuliang").trigger("blur");}
						
						
					 }else{
						 $("#aa").html("网络超时");
					 }
				}
	    });		
	}
})
	
var timers = setInterval("$.fn.newslist()",4000); 

//计算总价

$('#shuliang').blur(function(){
	var zz = $.trim($(this).val());
	var za = /^\d+(\.\d+)?$/;
	if(zz==""){
	alert('请输入数量');
	}
 
 
  if(isNaN(zz))//判断这个数是否都数字
       {
          alert("请输入数字");//如果不是数字提示
              $(this).val('');
        }
          
  if (zz.indexOf(".") > -1)
      {
         if (zz.substr(zz.indexOf(".") + 1, zz.length - zz.indexOf(".")).length > 1)
                {
                    alert("最多一位小数！");
                }
      }
		
		
		
	var buypice = parseFloat($("#buypice").text());
	var total = zz * buypice;
	var totals = total.toFixed(2);
	$('#total').html(totals);
	
 })
//提交购买信息
$("#code").click(function(){
						$(".yzm_img").attr("src", "/Home/Buy/verify/"+Math.random());
						});

 $("#sub_btn").click(function(){
	 var buypice = parseFloat($("#buypice").text());
	 var total = parseFloat($("#total").text());
	 var shuliang = $.trim($("#shuliang").val());
 
		var email = $("#email").val();
		var add = $.trim($("#add").val());
		var checkcode = $("#verify").val();
		
		if(shuliang==""){
			alert("数量不能为空!");
			return false;
		}
		if(email==""){
			alert("填写邮箱!");
			return false;
		}
		
		 var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
		if(!myreg.test(email) ){
			alert("请填写正确邮箱!");return false;
		}
		
		if(add==""){
			alert("填写收款地址!");
			return false;
		}
		if(add.length !=34){
		   alert("比特币地址填写错误!");
			return false;
		}
		if(checkcode==""){
			alert("验证码不能为空!");
			
			return false;
		}
		$.post(
			'/Home/Buy/buy',
			{
				buypice:buypice,
				shuliang:shuliang,
				total:total,
				email:email,
				add:add,
				checkcode:checkcode
			},
			function(data){
				var data = $.parseJSON(data);
/* 				if(data==1){
					alert("验证码错误!");
					$("#code").click();
					return false;
				}else if(data==2){
					alert("交易价格加载错误");
					return false;
				}else if(data==3){
					alert("请填写数量!");
					return false;
				}else if(data==4){
					alert("交易价格加载错误!");
					return false;
				}else if(data==5){
					alert("邮箱不能为空!");
					return false;
				}else if(data==7){
					alert("操作错误!");
					return false;
				}else{
					window.location.href="<?php echo U('Buy/buyemail',array('id'=>$data));?>";//跳转到首页
				}
				 */
				
			switch(data){
				case 1:
					alert("验证码错误!");
					$("#code").click();
					break;
				case 2:
					alert("交易价格加载错误");
					break;
				case 3:
					alert("请填写数量!");
					break;
				case 4:
					alert("交易价格加载错误!");
					break;
				case 5:
					alert("邮箱不能为空!");
					break;
				case 7:
					alert("操作错误!");
					break;
				default:
					window.location.href="/Home/Buy/buyemail/id/"+data; 
					break;
			}
 
				
				
			}
		);
	});


})
</script>
      </ul>


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