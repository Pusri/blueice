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
	


<div id="main-container" class="container">
    <div class="row">
        
        <!-- 左侧 nav
        ================================================== -->
            <div class="span3 bs-docs-sidebar">
                
                <ul class="nav nav-list bs-docs-sidenav">
                    <?php echo W('Category/lists', array($category['id'], ACTION_NAME == 'index'));?>
                </ul>
            </div>
        
        
    <div class="span9">
        <!-- Contents
        ================================================== -->
        <section id="contents" class="margin_top20">
            <?php $category=D('Category')->getChildrenId($category['id']);$__LIST__ = D('Document')->page(!empty($_GET["p"])?$_GET["p"]:1,10)->lists($category, '`level` DESC,`id` DESC', 1,true); if(is_array($__LIST__)): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="">
                    <h3><a href="<?php echo U('Article/detail?id='.$list['id']);?>"><?php echo ($list["title"]); ?></a></h3>
                </div>
                <div>
                    <p class="lead"><?php echo ($list["description"]); ?></p>
                </div>
                <div>
                    <span><a href="<?php echo U('Article/detail?id='.$list['id']);?>">查看全文</a></span>
                    <span class="pull-right">
                        <span class="author"><?php echo (get_username($list["uid"])); ?></span>
                        <span>于 <?php echo (date('Y-m-d H:i',$list["create_time"])); ?></span> 发表在 <span>
                        <a href="<?php echo U('Article/lists?category='.get_category_name($list['category_id']));?>"><?php echo (get_category_title($list["category_id"])); ?></a></span> 
                        <span>阅读( <?php echo ($list["view"]); ?> )</span>&nbsp;&nbsp;
                    </span>
                </div>
                <hr/><?php endforeach; endif; else: echo "" ;endif; ?>

        </section>
    </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
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