<?php
	if ( !( $database = mysqli_connect( "localhost","root", "","python" ) ) )
	die( "Could not connect to database </body></html>" );
            //連上資料庫，如果不行就顯示錯誤訊息

	if ( !mysqli_select_db( $database, "python" ) )
    die( "Could not open products database </body></html>" );
            //連到table，如果不行就顯示錯誤訊息
	mysqli_query($database,"SET NAMES UTF8");//set coding UTF8
	if ( !( $result = mysqli_query($database,"SELECT * FROM finaloutput") ) )//是否可以query
         {
            print( "<p>Could not execute query!</p>" );
            die( mysql_error() . "</body></html>" );
         }
    $result=mysqli_query($database,"SELECT * FROM finaloutput order by at desc"); //抓DB裡的data
?>

<!DOCTYPE html>
<html>
<head>
<title>Hello Idol</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<link rel="shortcut icon" href="images/korean.png"><!--icon-->
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->	
<style>
	@import url(http://fonts.googleapis.com/earlyaccess/notosanstc.css);
        body{
            font-family: 'Noto Sans TC', sans-serif;
        }
</style>
</head>

<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="index.php"><span>Hello</span> Idol </a><span><img src="images/south-korea.png"></span></h1>
				</div>
				<!--navbar-header-->
				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li class="active"><a href="index.php">搜尋</a></li>
						<li><a href="artist.html">藝人</a></li>
						<li><a href="concert.php">演唱會</a></li>
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="images/GG.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images/Apink.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images/got72.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/AOA.jpeg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/SHINee2.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/blackpink.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">	
					<div class="booking-info">
					<h2>搜尋活動</h2>
					<div id="horizontalTab" style="display:block; width:100%; margin:0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">輸入資料，搜尋活動。</li>
						<div class="clearfix"></div>
					</ul>		  	 
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="facts">
								<div class="booking-form">
									<div class="online_reservation">
										<div class="b_room">
											<div class="booking_room">
											<div class="reservation">
											<ul>		
												<li  class="span1_of_1 desti">
												<div class="book_date">
												<form action="search.php" method="post">
													<h5>藝人</h5>
													<select name="artist" required>
  														<option value="太妍">太妍</option>
  														<option value="BIGBANG">BIGBANG</option>
  														<option value="SHINee">SHINee</option>
  														<option value="C.N.BLUE">C.N.BLUE</option>
  														<option value="GOT7">GOT7</option>
  														<option value="GFRIEND">GFRIEND</option>
  														<option value="TWICE">TWICE</option>
  														<option value="NCT">NCT 127</option>
													</select>
													<h5>日期(4月1日到6月20日)</h5>
													<input type="date" name="time" required>
													<input class="date_btn" type="submit" value="搜尋" />
												</form>		
												</li>
											</ul>
											</div>
											
											</div>
														
										</div>
									</div>
								</div>	
							</div>
						</div>		
					</div>	
					</div>	
					</div>
				</div>
			</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>更多資料</h3>
			</div>
			<div class="col-md-4 banner-left">
			<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>藝人活躍排行榜</h4>
						</div>
						
						<div class="top-destinations-bottom">
							<div class="td-grids">
								<h3><p>SHINee</p></h3>
								<br>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<h3><p>BIGBANG</p></h3>
								<br>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<h3><p>TWICE</p></h3>
								<br>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<h3><p>GOT7</p></h3>
								<br>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<h3><p>GFRIEND</p></h3>
								<br>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<h3><p>NCT 127</p></h3>
								<br>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<h3><p>C.N.BLUE</p></h3>
								<br>
								<div class="clearfix"> </div>
							</div>
							<div class="td-grids">
								<h3><p>太妍</p></h3>
								<br>
								<div class="clearfix"> </div>
							</div>
						
						</div>

			</div>
			</div>
			<div class="col-md-8 banner-right">
			<div class="top-destinations-grids">
						<div class="top-destinations-info">
							<h4>最新消息</h4>
						</div>
						
						<div class="top-destinations-bottom">
							<?php
							for ($i=1;$i<=10;$i++) {
								$row = mysqli_fetch_array($result)
						?><div class="td-grids">
								
								<div class="col-xs-7 td-middle">
									<?php print("$row[2]"); ?>
									<p><?php print("$row[0]"); ?></p>
								</div>
								<div>
									<p><?php print("$row[1]"); ?></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						<?php
							}
						?>
						</div>
			</div>
		</div>
		</div>
			
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">

			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		
		<!-- //container -->
	</div>
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © 2015 Govihar . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>		
</body>
</html>