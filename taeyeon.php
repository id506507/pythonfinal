<?php
	if ( !( $database = mysqli_connect( "localhost","root", "","python" ) ) )
	die( "Could not connect to database </body></html>" );
            //連上資料庫，如果不行就顯示錯誤訊息

	if ( !mysqli_select_db( $database, "python" ) )
    die( "Could not open products database </body></html>" );
            //連到table，如果不行就顯示錯誤訊息
	mysqli_query($database,"SET NAMES UTF8");//set coding UTF8
	if ( !( $result = mysqli_query($database,"SELECT * FROM taeyeon") ) )//是否可以query
         {
            print( "<p>Could not execute query!</p>" );
            die( mysql_error() . "</body></html>" );
         }
    $result=mysqli_query($database,"SELECT content FROM taeyeon ORDER BY at DESC"); //抓DB裡的data
    $result2=mysqli_query($database,"SELECT at FROM taeyeon ORDER BY at DESC"); //抓DB裡的data

?>
<!DOCTYPE html>
<html>
<head>
<title>Hello Idol</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
<style>
	@import url(http://fonts.googleapis.com/earlyaccess/notosanstc.css);
        body{
            font-family: 'Noto Sans TC', sans-serif;
        }
    #map {
        height: 400px;
        width: 100%;
       }
</style>
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->

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
						<li><a href="index.php">搜尋</a></li>
						<li class="active"><a href="artist.html">藝人</a></li>
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
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<!--single-page-->
				<div class="single-page">
						<div class="col-md-8 single-gd-lt">
							<div class="single-pg-hdr">
								<h2>太妍(少女時代)</h2>
								<p>韓國女歌手及主持人，為女子組合少女時代的隊長。她在2004年參加選拔，獲得一位獎及大獎，進入SM娛樂當練習生。</p>
							</div>
						</div>
						<div class="col-md-4 single-gd-rt">
						<img src="images/taeyeon.jpg">
						</div>
						同期競爭對手：SHINee、BIGBANG、NCT 127
						<div class="clearfix"></div>
				
				</div>
				<!--//single-page-->
			</div>
			<div class="c-rooms">
			<div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-6 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>活動</h6>
							</div>
							
								<div class="rate-features">
									<ul>
									<?php
										while ($row = mysqli_fetch_array($result)) 
										{
									?>						
									<li><?php print("$row[0]"); ?></li>
									<?php
										}
									?>
								</ul>
								</div>
							
						</div>
						<div class="col-md-6 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>日期</h6>
							</div>
							<div class="rate-features">
								<ul>
									<?php
										while ($row = mysqli_fetch_array($result2)) 
										{
									?>						
									<li><?php print("$row[0]"); ?></li>
									<?php
										}
									?>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
						<div id="map"></div>
						<script>
    						var citymap = {
      							Incheon:{
        							center:{lat:37.460416,lng:126.440808}
      							},
    							Bangkok:{
        							center:{lat:13.745278,lng:100.492348}
      							},
    							Taipei:{
        							center:{lat:25.040511,lng:121.451865}
      							},
    							Seoul:{
        							center:{lat:37.557208,lng:126.988520}
      							}
   							};
						function initMap() {
							var uluru = {lat: 25.040511, lng:121.451865 };
  							var map = new google.maps.Map(document.getElementById('map'), {
    								zoom: 4,
    								center: uluru
  								});
  							for (var city in citymap) {
        						var marker = new google.maps.Marker({
        							position:citymap[city].center ,
        							map: map,
        							title:city// '我要繁體中文'
      							});
 							}
						}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg90-IrOIgP5cH8hjikpDX6Wx-lm6EgFM&callback=initMap"></script>
							</div>
						
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		
		<!-- //container -->
	</div>
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">
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
</body>
</html>