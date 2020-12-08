<?php /* Template Name: CustomTemplate */ ?>

<?php 
	include_once('customtemplate/advance_custom_fields.php');
?>

<html>
	<head>
		<link rel="stylesheet" href="/BDSwiss-Challenge/wp-content/themes/oceanwp/customtemplate/customcss.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="container">
			<img src="/BDSwiss-Challenge/wp-content/uploads/2020/12/bdswiss-logo-dark.png" />
		</div>
		<header>
			<div class="containing-table">
				<div class="header-background">
								
					<h1>Trade Now</h1>
					<p style="font-size:16px;">250+ Forex pairs & FDs on Shares, Indices, Energies & Metals</p>
					<p style="margin-top: 40px;"><a href="" target="_blank" class="button-started">Get Started today</a></p>
				</div>
			</div>		
			<video autoplay muted loop src="/BDSwiss-Challenge/wp-content/uploads/2020/12/videoplayback.mp4"></video>
		</header>
	  
		<!-- Display the shortcodes -->
		<div class="container">
			<div class="outer-block">
				<div class="shortcode-class">
					<?php echo do_shortcode('[shortcode source="News Feed - FxStreet"]'); ?>
					<!-- <?php echo do_shortcode('[shortcode source="http://xml.fxstreet.com/news/forex-news/index.xml" posts_limit="5" keywords="" title="News Feed - FxStreet" description="FXStreet is a leading source for reliable news and real time Forex analysis. FXStreet offers real-time exchange rates, charts and an economic calendar" logo="/BDSwiss-Challenge/wp-content/uploads/2020/12/FXStreet.png"]'); ?> -->
				</div>
				
				<div class="shortcode-class" style="vertical-align: top">
					<!-- <?php echo do_shortcode('[shortcode source="News Feed - ForexLive"]'); ?> -->
					<?php echo do_shortcode('[shortcode_manual source="https://www.forexlive.com/feed" posts_limit="2" keywords="" title="News Feed - ForexLive" description="Forex News from ForexLive. The fastest Foreign Exchange market reporting and analysis. Live Forex and economic news. Technical analysis, headlines, Live quotes." logo="/BDSwiss-Challenge/wp-content/uploads/2020/12/forexlive.png"]'); ?>
				</div>	
			</div>	
		</div>
		
		<!-- divider -->
		<div class="container">
			<div class="divider">				
			</div>		
		</div>
				
		<!-- Advance Custom Fieds -->
		<div class="container" style="text-align:center;">
			<div> 
				<div class="acf-title">	
					<?php echo $title; ?>
				</div>
				<div class="acf-desc">	
					<?php echo $description; ?>  
				</div>		
			</div>
			
			<div class="outer-block">
				<div class="icon-block">
					<p> <img src="<?php echo $register_image['url']; ?>"/> </p>
					<p class="icon-block-title"> <?php echo $register; ?> </p> 
					<p class="icon-block-desc"> <?php echo $register_desc; ?> </p>
				</div>
				<div class="icon-block">
					<p> <img src="<?php echo $fund_image['url']; ?>"/> </p>
					<p class="icon-block-title"> <?php echo $fund; ?> </p> 
					<p class="icon-block-desc"> <?php echo $fund_desc; ?> </p>
				</div>
				<div class="icon-block">
					<p> <img src="<?php echo $trade_image['url']; ?>"/> </p>
					<p class="icon-block-title"> <?php echo $trade; ?> </p> 
					<p class="icon-block-desc"> <?php echo $trade_desc; ?> </p>
				</div>
				<div class="icon-block">
					<p> <img src="<?php echo $withdraw_image['url']; ?>"/> </p>
					<p class="icon-block-title"> <?php echo $withdraw; ?> </p> 
					<p class="icon-block-desc"> <?php echo $withdraw_desc; ?> </p>
				</div>			
			</div>
			
			<div>
				<div style="margin-top:20px;">
					<a href="<?php echo $open_account; ?>" target="_blank" class="button-started"><?php echo $open_account_text; ?></a>
					<p class="risk-note"> <?php echo $open_account_risk; ?> </p>
				</div>
			</div>
			
		</div>
	  
		<!-- footer -->
		<footer>
			<div class="container">
				<p> *<b>Risk Warning:</b> CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. <b>79.5 % of retail investor accounts lose money when trading CFDs with this provider.</b> You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money.</p>
				<p> Swiss Markets and BDSwiss are registered trademarks of BDSwiss Holding Ltd. BDSwiss Holding Ltd is authorized and regulated by the Cyprus Securities and Exchange Commission (the “<a style="color: #ec1c24;" href="https://www.cysec.gov.cy/en-GB/home/" target="_blank" rel="noopener">CySEC</a>”, license no. 199/13 and registration no. HE 300153). The address of BDSwiss Holding Ltd is Apostolou Andrea Street 11, Hyper Tower, 5th Floor, 4007 Mesa Yeitonia, Limassol, Cyprus. Please review the company policies regarding the regulation <a style="color: #ec1c24;" href="https://eu.bdswiss.com/general-terms-and-conditions/">here</a>. </p>
				<p> Registered address: Ioanni Stylianou 6, 2nd floor, Office 202, 2003 Nicosia, Cyprus. For complaints please email us at <a style="color: #ec1c24;" href="mailto:complaints@bdswiss.com">complaints@bdswiss.com</a> </p>
				<p> German address (for postal letters): Mainzer Landstrasse 41, 60329-Frankfurt, Germany </p>
			</div>
		</footer>
	  
	</body>
</html>