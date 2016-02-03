<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TheGoFind</title>
	<link rel="shortcut icon" href="http://localhost/yii/frontend/views/layouts/pic/title.ico">
	<link rel="stylesheet" type="text/css" href="http://localhost/yii/frontend/views/layouts/css/site.css">	
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		font-size: 18px;
		/*color: rgba(255,255,255,0.8);*/
		color: white;
	}
	html, body {
    	background-color: #eee;
    	font-family: Roboto,Arial,sans-serif;
   		height: 100%;
   		min-width: 1200px;
	}
	.header{
		background: #fff;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 58px;
		float: left;
		margin: 0;
		padding: 0;
	}
	.logo {
    	position: absolute;
    	width: 235px;
    	height: 58px;
    	position: absolute;
    	left: 0;
    	top: 0;
    	float: left;
	}
	.suofang {
		MARGIN: auto;
		WIDTH: 175px;
		margin: 13px 30px 0 30px;
	}
	.suofang img{
		MAX-WIDTH: 100%!important;
		HEIGHT: auto!important;
		width:expression(this.width>175?"175px":this.width)!important;
	}
	.logo_pic{
		background-image: url('http://localhost/yii/frontend/views/layouts/pic/logo.png');
		background-repeat:no-repeat;
    	height: 33px;
    	width: 175px;
    	/*background-color: #4285f4;*/
    	margin: 13px 30px 0 30px;
	}
	.search{
		position: absolute;
    	width: 700px;
    	height: 58px;
    	position: absolute;
    	left: 235px;
    	top: 0;
    	background-color: #fff;
    	float: left;
	}
	.profile{
    	width: 250px;
    	height: 58px;
    	position: absolute;
    	top: 0;
    	right: 0;
	}
	.nickname{
		width: 140px;
		height: 58px;
		float: left;
		text-align: right;
	}
	.nickname p{
		color: #000;
		text-align: right;
	}
	.avatar{
    	/*margin: 0 30px 0 170px;*/
		width: 50px;
		height: 40px;
		float: left;
		margin: 9px 30px;
	}
	.avater img{
		MAX-WIDTH: 100%!important;
		HEIGHT: auto!important;
		width:expression(this.width>40?"40px":this.width)!important;
	}
	.container{
		position: absolute;
		top: 58px;
		left: 0;
		width: 100%;
    	height: 1000px;
	}
	.container_bar{
		width: 100%;
    	height: 56px;
    	background-color: #4285f4;

	}
	.container_leftbar{
		width: 200px;
    	height: 48px;
    	float: left;
    	margin-top: 4px;
	}
	.docs_logo{
		background-image: url('http://localhost/yii/frontend/views/layouts/pic/docs_logo.png');
		background-repeat:no-repeat;
    	height: 48px;
    	width: 48px;
    	float: left;
    	margin: 12px 0px 0 30px;
	}
	.docs{
		height: 48px;
    	width: 92px;
    	float: left;
    	font-weight: bold;
    	font-family: Roboto,Arial,sans-serif;
/*    	-webkit-font-smoothing: antialiased;
    	font-size: 20px;
    	font-weight: 500;*/
	}
	.container_view{
		position: relative;
		width: 100%;
    	height: 284px;
    	float: left;
    	background-color: #424249;
	}
	.view_top{
		margin: 0 auto;
		width: 900px;
		height: 56px;
	}
	.view_top_left{
		width: 500px;
		height: 56px;
  		float: left;
  		background-color: #424249;
	}
	.view_top_right{
		width: 200px;
		height: 56px;
  		float: right;
  		background-color: #424249;
	}
	.view_foot{
		margin: 0 auto;
		width: 900px;
		height: 228px;
	}
	.container_content{
		margin: 0 auto;
		width: 900px;
		height: 100%;
		background-color: #eef;
	}
	</style>
</head>
<body>


<!-- 顶部 -->
<div class='header'>


	<!-- 顶部：logo -->
	<div class='logo' >
		<!-- <div class="logo_pic"></div> -->
		<div class="suofang">
			<img src="http://localhost/yii/frontend/views/layouts/pic/logo.png"/>
		</div>
		
	</div>


	<!-- 顶部：搜索框 -->
	<div class='search'>
		<div id="search" style="margin-top: 11px;">
    		<input type="text" name="q">
    		<input class="button" type="submit" value="Search">
  		</div>
	</div>


	<!-- 顶部：个人信息 -->
	<div class='profile'>
		<div class='nickname'>
			<table width='140px' height='58px' topmargin="0" leftmargin="0">
				<tr>
					<td align="absmiddle">
						<p height=100 align=center>haoran chen</p>
					</td>
				</tr>
			</table>
		</div>
		<div class='avatar'>
			<img src="http://localhost/yii/frontend/views/layouts/pic/chen.jpg"/>
		</div>
	</div>
</div>


<!-- 正文 -->
<div class='container'>

	<!-- 正文标题栏 -->
	<div class='container_bar'>
		<div class='container_leftbar'>
			<div class='docs_logo'></div>
			<div class='docs'>
				<table height='48px' topmargin="0" leftmargin="0">
					<tr>
						<td align="absmiddle">
							<p height=100 align=center>Docs</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<!-- 正文预览栏 -->
	<div class='container_view'>
		<div class='view_top'>
			<div class='view_top_left'>
				<table height='56px' topmargin="0" leftmargin="0" >
					<tr>
						<td align="absmiddle">
							<p class='start' height=100 align=center>Start a new document</p>
						</td>
					</tr>
				</table>
			</div>
			<div class='view_top_right'>
				<table height='56px' topmargin="0" leftmargin="0">
					<tr>
						<td align="absmiddle">
							<p height=100 align=center>More</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class='view_foot'>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		</div>
	</div>

	<!-- 正文文本 -->
	<div class='container_content'>

	</div>

</div>

<!-- 底部 -->
<footer class='footer'>4</footer>

</body>
</html>