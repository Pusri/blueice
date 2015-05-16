<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<link href="/blueice/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/blueice/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/blueice/Public/static/bootstrap/css/docs.css" rel="stylesheet">
<link href="/blueice/Public/static/bootstrap/css/onethink.css" rel="stylesheet">
<link href="/blueice/Public/static/custom.css" rel="stylesheet">
<link href="Public/Home/css/style.css" rel="stylesheet" type="text/css"  media="all" />	
<link rel="stylesheet" href="Public/Home/css/responsiveslides.css">
<script src="Public/Home/js/jquery.min.js"></script>
<script src="Public/Home/js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 2500,
			        speed: 600
			      });
			});
		  </script>
<style>
	.logo{font-family: "微软雅黑";
  }
  .logo a{
  	color:#fff;
  }
</style>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/blueice/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/blueice/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<!--<![endif]-->
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<!--========================================导航条
================================================== -->
<!---start-header---->
            <div class="header">
                <div class="wrap">
                <div class="logo">
                    <!-- <img src="Public/Home/images/logo.png" title="logo" /> -->
                   <img src="Public/Home/images/logo.png" alt="">
                </div>
                <div class="top-nav">
                    <ul>
                        <?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select(); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><li>
                                            <a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?></a>
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    <div class="pull-right">
                                    <?php if(is_login()): ?><ul class="nav" style="margin-right:0;width:145px;">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-left:0;padding-right:0"><?php echo get_username();?> <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li style="width:70px;line-height:80px;"><a href="<?php echo U('User/profile');?>">修改密码</a></li>
                                                <li style="width:70px;line-height:80px;"><a href="<?php echo U('User/logout');?>">退出</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <?php else: ?>
                                    <ul class="nav" style="margin-right:0;width:170px;">
                                        <li style="width:80px;">
                                            <a href="<?php echo U('User/login');?>">登录</a>
                                        </li>
                                        <li style="width:80px;">
                                            <a href="<?php echo U('User/register');?>">注册</a>
                                        </li>
                                    </ul><?php endif; ?>
                                </div>
                    </ul>
                </div>

                <div class="clear"> </div>
            </div>
        </div>
            <!---End-header---->
	<!-- /头部 -->
	
	<!-- 主体 -->
	<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--  Free HTML5 Template by http://www.templatemo.com -->
    
<!--start-image-slider---->
                    <div class="image-slider">
                        <!-- Slideshow 1 -->
                        <ul class="rslides" id="slider1">
                          <li><img src="Public/Home/images/slider/slide4.jpg" alt=""></li>
                          <li><img src="Public/Home/images/slider/slide2.jpg" alt=""></li>
                          <li><img src="Public/Home/images/slider/slide3.jpg" alt=""></li>
                          <li><img src="Public/Home/images/slider/slide1.jpg" alt=""></li>
                           </ul>
                         <!-- Slideshow 2 -->
                    </div>
            <!--End-image-slider---->
        <!---End-wrap---->
        <div class="clear"> </div>
        <!---start-content---->
        <div class="content">
                <div class="content_top">
                    <div class="wrap">
                        <p>冰蓝工作室是互联网创业社团，将定位于为全体师生提供丰富的学习资源，全方位的周到的服务，以帮助大学生进行合理规划，使教学教务管理一体化，形成一个官方的，充满活力的，校方到师生的信息渠道，能使信息更快速、安全、准确流通。同时可以丰富在校学生的课余生活，为广大师生的校园生活提供最大的方便和空间。 </p>
                    </div>
                </div>
                
            <div class="content-grids">
                <div class="wrap">
                 <div class="grid">
                    <a href="index.php?s=/Home/Work/index.html"><img src="Public/Home/images/products/product6.jpg" title="image-name" /></a>
                    <h3>作品</h3>
                    <p>冰蓝工作室旗下的创业项目及商业作品</p>
                    <a class="button" href="index.php?s=/Home/Work/index.html">更多</a>
                </div>
                <div class="grid">
                    <a href="index.php?s=/Home/Article/index/category/blog.html"><img src="Public/Home/images/products/product5.jpg" title="image-name" /></a>
                    <h3>新闻</h3>
                    <p>冰蓝工作室新闻及公告</p>
                    <a class="button" href="index.php?s=/Home/Article/index/category/blog.html">更多</a>
                </div>
                <div class="grid last-grid">
                    <a href="index.php?s=/Home/About/index.html"><img src="Public/Home/images/products/product3.jpg" title="image-name" /></a>
                    <h3>成员介绍</h3>
                    <p>冰蓝工作室成员介绍</p>
                    <a class="button" href="index.php?s=/Home/About/index.html">更多</a>
                </div>
                
                <div class="clear"> </div>
            </div>
         </div>
            <div class="specials">
                <div class="wrap">
                    <div class="specials-heading">
                        <h3>创造一种新教育模式</h3>
                    </div>
                    <div class="specials-grids">
                        <div class="special-grid">
                            <img src="Public/Home/images/grids-img1.jpg" title="image-name" />
                            <a href="#">校企合作</a>
                            <p>与多家企业合作，定制化培养专业人才。</p>
                        </div>
                        <div class="special-grid">
                            <img src="Public/Home/images/grids-img2.jpg" title="image-name" />
                            <a href="#">项目实战</a>
                            <p>通过大量的商业项目进行实战，使学生更早接触工作所需的专业技能。并在实战中将理论付诸实践。</p>
                        </div>
                        <div class="special-grid spe-grid">
                            <img src="Public/Home/images/grids-img3.jpg" title="image-name" />
                            <a href="#">人才孵化</a>
                            <p>我们深知每个团队需要各方面人才，学生根据自己的兴趣选择自己的工作方向，让兴趣成为学生的老师。</p>
                        </div>
                        
                        <div class="clear"> </div>
                    </div>
                </div>
            </div>  
            <div class="testmonials">
                <div class="wrap">
                    <div class="testmonial-grid">
                        <p>&#34; 教育的目的在于能让青年人毕生进行自我教育。&#34;</p>
                        <p> —— 哈钦斯</p>
                    </div>
                </div>
            </div>
        </div>
        <!---End-content---->
        <div class="clear"> </div>
</body>
	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
    <footer class="footer">
      <div class="container">
          <p> 本站由 <strong><a href="http://pusri.github.io" target="_blank">Pusri</a></strong> 强力驱动</p>
      </div>
    </footer>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/blueice", //当前网站地址
		"APP"    : "/blueice/index.php?s=", //当前项目地址
		"PUBLIC" : "/blueice/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>