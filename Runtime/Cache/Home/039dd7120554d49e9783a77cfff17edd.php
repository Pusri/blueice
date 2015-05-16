<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<link href="/ot/wwwroot/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/ot/wwwroot/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/ot/wwwroot/Public/static/bootstrap/css/docs.css" rel="stylesheet">
<link href="/ot/wwwroot/Public/static/bootstrap/css/onethink.css" rel="stylesheet">
<link href="/ot/wwwroot/Public/static/custom.css" rel="stylesheet">
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
<script src="/ot/wwwroot/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/ot/wwwroot/Public/static/jquery-1.10.2.min.js"></script>
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

        <div class="clear"> </div>
        <!---start-content---->
        <div class="content">
                
            <div class="content-grids">
                <div class="wrap">
                 <div class="grid">
                    <a href="#"><div class="picwrap"><img src="Public/Home/images/fm1.jpg" title="image-name" />
                    </div></a>
                    <h3>邹铃</h3>
                    <p>冰蓝创始人</p>
                    <p>总负责人，指导老师</p>
                </div>
                <div class="grid">
                    <a href="#"><div class="picwrap"><img src="Public/Home/images/psu.jpg" title="image-name" />
                    </div></a>
                    <h3>蔡鑫</h3>
                    <p>菜鸟科技创始人，冰蓝创始人</p>
                </div>
                
                
                <div class="clear"> </div>
            </div>
         </div>
            <div class="specials">
                <div class="wrap">
                    <div class="specials-heading">
                        
                    </div>
                    <div class="specials-grids">
                        <div class="special-grid">
                            <div class="picwrap"><img src="Public/Home/images/gj.jpg" title="image-name" />
                            </div><a href="http://www.gonjay.com">龚杰</a>
                            <p>技术</p>
                            <p>网易游戏</p>
                        </div>
                        <div class="special-grid">
                            <div class="picwrap"><img src="Public/Home/images/xxy_big.jpg" title="image-name" />
                            </div><a href="http://pusri.github.io">谢雪彦</a>
                            <p>技术</p>
                            <p>webank</p>
                        </div>
                        <div class="special-grid spe-grid">
                            <div class="picwrap"><img src="Public/Home/images/cxx.jpg" title="image-name" />
                            </div><a href="#">陈楚骁</a>
                            <p>产品</p>
                            <p>京东</p>
                        </div>
                        
                        <div class="clear"> </div>
                    </div>
                    <div class="specials-grids">
                        <div class="special-grid">
                            <div class="picwrap"><img src="Public/Home/images/psb.jpg" title="image-name" />
                            </div><a href="#">袁俊</a>
                            <p>设计</p>
                            <p>欢聚时代</p>
                        </div>
                        <div class="special-grid">
                            <div class="picwrap"><img src="Public/Home/images/lmx.jpg" title="image-name" />
                            </div><a href="#">刘明雪</a>
                            <p>营销</p>
                        </div>
                        
                        
                        <div class="clear"> </div>
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
		"ROOT"   : "/ot/wwwroot", //当前网站地址
		"APP"    : "/ot/wwwroot/index.php?s=", //当前项目地址
		"PUBLIC" : "/ot/wwwroot/Public", //项目公共目录地址
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