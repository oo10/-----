<!DOCTYPE html>

<html lang="zh">

  <head>

    <meta charset="utf-8">

    <title>帮帮-校园导航</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />

    <meta name="apple-mobile-web-app-capable" content="yes" />    

    <meta name="apple-mobile-web-app-status-bar-style" content="black" />    

    <meta content="telephone=no" name="format-detection" />

    <link rel="stylesheet" href="css/responsive-nav.css">

    <link rel="stylesheet" href="css/nav-styles.css">

    <script src="js/responsive-nav.js"></script>

    <style>

	body,html,#main,#con {

	margin:0px;

	height:100%;}

    body{

	background:#FFF;

	}

    .h1-title{

	background:#2c7;

    }

    </style>



    <script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=3HKBZ-NRR3U-X6TVJ-43FTD-ZJYXK-USFIN"></script>

	<script>

		function init() {

			// 创建街景

			pano = new qq.maps.Panorama(document.getElementById('pano_container'), {

				pano: '25061041140114104014300',    //场景ID

				pov:{ 

					heading:307.6,  //偏航角

					pitch:-14.3       //俯
				},

				zoom:1      //缩放

			});

		}

	</script>

  </head>

  <body onLoad="init();">

    <nav class="nav-collapse">

		<ul>

			<li><a style="background-color:#2c7"><b>帮帮</b><span onClick="document.location='zhongchou.php';">众筹</span><span class="nop">|</span><span onClick="document.location='ziyuan.php';">资源交换</span><span class="nop">|</span><span onClick="document.location='tiaozao.php';">跳蚤市场</span><span class="nop">|</span><span onClick="document.location='zaixianqiuzhu.php';">求助</span></a></li>

			<li><a style="background-color:#2c7"><b>资讯</b><span onClick="document.location='xuexiaohuodong.php';">活动</span><span class="nop">|</span><span onClick="document.location='biyejiyu.php';">毕业寄语</span><span class="nop">|</span><span onClick="document.location='banjiguanli.php';">班级管理</span><span class="nop">|</span><span onClick="document.location='jianzhi.php';">兼职</span></a></li>

			<li><a style="background-color:#2c7"><b>个人</b><span onClick="document.location='zhuce.php';">注册</span><span class="nop">|</span><span onClick="document.location='personal.php';">个人中心</span><span class="nop">|</span><span onClick="document.location='fendouguiji.html';">奋斗轨迹</span><span class="nop">|</span><span onClick="document.location='yujian.php';">遇见</span></a></li>

		</ul>

    </nav>

    <div id="main">

      <h1 class="h1-title">　　校园街景</h1>

      <div id="con">

         <div style="width:100%; height:100%; height:100%" id="pano_container"></div>

      </div>

    </div>

<!-------------------nav-js-------------------->

    <script>

      var navigation = responsiveNav(".nav-collapse", {

        animate: true,                    // Boolean: Use CSS3 transitions, true or false

        transition: 284,                  // Integer: Speed of the transition, in milliseconds

        label: "Menu",                    // String: Label for the navigation toggle

        insert: "after",                  // String: Insert the toggle before or after the navigation

        customToggle: "",                 // Selector: Specify the ID of a custom toggle

        closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked

        openPos: "relative",              // String: Position of the opened nav, relative or static

        navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!

        navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active

        jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element

        init: function(){},               // Function: Init callback

        open: function(){},               // Function: Open callback

        close: function(){}               // Function: Close callback

      });

    </script>

  </body>

</html>

