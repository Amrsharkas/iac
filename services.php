<?php $i=2;?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="iac project management.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="css/font-icons.css">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="css/swiper.css">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="demos/construction/construction.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<!-- Document Title
	============================================= -->
	<title>iac Project Management</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">
		<?php include_once 'header.php' ;?>
		<!-- Top Bar
		============================================= -->
		
		

		<!-- Content
		============================================= -->
		<section id="content">
			
			
		

				
<?php include_once('inc_services.php');?>
		</section><!-- #content end -->

		<?php include_once 'footer.php' ; ?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/functions.js"></script>
	<script src="/jquery-3.6.4.min.js"></script>
	<script type="text/javascript">
		$(".services .fbox-content").each(function(){
			let height = $(this).find("p:first").height();
			console.log(height);
			if(height > 100){
				$(this).find("p:first").css("max-height","100px");
				$(this).append(`<div><a class="read_more" href="javascript:void(0)">read more</a></div>`);

			}
		});
		$(document).on("click",".read_more", function(){
		  $(this).closest(".fbox-content").find("p").css("max-height","900px");
		  $(this).removeClass("read_more").addClass("read_less");
		  $(this).html("read less");
		});
		$(document).on("click",".read_less", function(){
		  $(this).closest(".fbox-content").find("p").css("max-height","100px");
		  $(this).removeClass("read_less").addClass("read_more");
		  $(this).html("read more");
		});
	</script>

</body>
</html>