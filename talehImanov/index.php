<?
  include 'connection.php';

  $select = "SELECT * from social";
  $text = "SELECT * from abzas";
  $result = $con->query($select);
  $text_result = $con->query($text);
?>

<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- SEO -->
	<title>Split - HTML Template Demo</title>
	<meta name="description" content="Split is a centrally-divided layout for a professional online presence with a big image or video left with alongside content." />
	<meta name="robots" content="index, follow" />
	<meta name="referrer" content="always" />

	<!-- Social & Open Graph -->
	<meta property="og:title" content="Split - HTML Template Demo" />
	<meta property="og:description" content="Split is a centrally-divided layout for a professional online presence with a big image or video left with alongside content." />
	<meta property="og:image" content="https://demo.onepagelove.com/fullsingle-html/split/images/social.jpg"> <!-- include your hosted image full URL -->
	<meta property="og:url" content="https://demo.onepagelove.com/fullsingle-html/split/" />
	<meta name="twitter:title" content="Split - HTML Template Demo" >
	<meta name="twitter:description" content="Split is a centrally-divided layout for a professional online presence with a big image or video left with alongside content." />
	<meta name="twitter:image" content="https://demo.onepagelove.com/fullsingle-html/split/images/social.jpg" /> <!-- include your hosted image full URL -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@onepagelove" />
	<meta name="twitter:creator" content="@robhope" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">

	<!-- Styles -->
	<link rel='stylesheet' href='assets/css/split.css' type='text/css' media='screen' />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

</head>

<body id="fullsingle" class="page-template-page-fullsingle-split">

<div class="fs-split">

	<!-- Image Side -->
	<div class="split-image">

	</div>

	<!-- Content Side -->
	<div class="split-content">

		<div class="split-content-vertically-center">
		
			<div class="split-intro">
				
				<h1>Jenny Jones</h1>

				<span class="tagline">Designer. Stylist. Nomad.</span>

			</div>

			<div class="split-bio">
				<? while($txt = mysqli_fetch_assoc($text_result)) {?>
				<p>
			        <?= $txt['text'] ?>
			    </p>
			    <? } ?>

			</div>

			<div class="split-lists">
				
				<div class="split-list">

					<h3>Connect</h3>

					

					<ul>
						<? while($row = mysqli_fetch_assoc($result)) {?>
			              <li>
			                <a href="#">
			                  <?= $row['name'] ?>
			                </a>
			              </li>

			              <? } ?>
					</ul>

				</div>

				<div class="split-list">

					<h3>Social</h3>

					<ul>
					</ul>

				</div>

				<div class="split-list">

					<h3>Network</h3>

					<ul>
					</ul>

				</div>
				
			</div>

			<div class="split-credit">

				<p>&copy;2017 <a href="#">Your Name</a> - <a href="https://onepagelove.com/split">Split Template</a> by <a href="https://onepagelove.com">One Page Love</a></p>

				<!-- 
				To edit this credit you can remove the CC3.0 license for only $5 here: https://onepagelove.com/split 
				this really helps contribute towards us developing more templates and means the world to me!
				Cheers, Rob (@robhope)
				-->

			</div>		

		</div>

	</div>

</div>

</body>
</html>