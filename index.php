
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta charset="UTF-8">

		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<meta name="viewport" content="width=device-width,initial-scale=1">

		<title></title>

		<!-- CSS Vendor -->
		<link rel="stylesheet" type="text/css" href="/assets/css/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/css/webflow.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/tilt.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/dnlsptzk.webflow.css"/>
		<link href='https://fonts.googleapis.com/css?family=Khand:400,300,500' rel='stylesheet' type='text/css'>
		<style>
			.khand-light {
				font-family: 'Khand', sans-serif;
				font-weight: 300; 
			}
			.khand-medium {
				font-family: 'Khand', sans-serif;
				font-weight: 500; 
			}
			.intoruction-mesg {
				width: 50%;
				text-align: right;
			}
			.home_centralarea {
  position: static;
  width: 100%;
  height: 100%;
  background-color: rgba(60, 60, 62, 0.49);
}
.home_parallaxpic {
  width: 102%;
  height: 102%;
  margin-top: -0.5%;
  margin-left: -1%;
  /**background-image: url('../images/bg_home_street.jpg');
  background-position: 50% 50%;
  background-size: cover;
  background-repeat: no-repeat;
  opacity: 0.4;*/
}
			input, textarea {
				-webkit-appearance: none;
				-webkit-border-radius: 0;
				border-radius: 0;
			}
			
			@media only screen and (min-device-width: 991px) {
				*::-webkit-scrollbar {
					width: 8px;
				}
				*::-webkit-scrollbar-track {
					background-color: #d4d4d4;
					border-left: 1px solid #d4d4d4;
				}
				*::-webkit-scrollbar-thumb {
					background-color: #3c3c3e;
					border-left: 1px solid #464648;
				}
				*::-webkit-scrollbar-thumb:hover {
					background-color: #464648;
				}
				.contact_content_wrapper::-webkit-scrollbar {
					width: 4px;
				}
				.contact_content_wrapper::-webkit-scrollbar-track {
					background-color: #3c3c3e;
					border-left: 1px solid #464648;
				}
				.contact_content_wrapper::-webkit-scrollbar-thumb {
					background-color: #969697;
					border-left: 1px solid #969697;
				}
				.contact_content_wrapper::-webkit-scrollbar-thumb:hover {
					background-color: #fff;
				}
				* {
					scrollbar-base-color: #3c3c3e;
					scrollbar-3dlight-color: none;
					scrollbar-highlight-color: #464648;
					scrollbar-track-color: #d4d4d4;
					scrollbar-arrow-color: #d4d4d4;
					scrollbar-shadow-color: none;
					scrollbar-dark-shadow-color: none;
				}
			}
			
			.projects_hero_sliderprojects_hero_slider,
			.projects_slider_pic {
				-webkit-transform: translate3d(0, 0, 0);
			}
			
			.about_centralarea {
				-webkit-transform: translateZ(0);
			}
			.dpr-logo {
				width: 96px;
			}
			@media (max-width: 991px) {

			}
			@media (max-width: 767px) {
			}
			@media (max-width: 479px) {
				.dpr-logo {
					width: 45px;
				}
				.intro_logo {
					width: 45px;
					height: 76px;
				}
				.intoruction-mesg {
					width: 80%;
					text-align: right;
				}
				.intro_mask {
					height: 1px;
					margin-top: 10px;
				}
				.newsblog-page .newsblog_centralarea table td div {
					text-align: right;
					font-size: 14px;
					line-height: 16px;
				}


				.newsblog_menuitem {
					font-size: 10px;
				}
				.contact_menuitem {
					font-size: 10px;
				}
				.projects_menuitem {
					font-size: 10px;
				}
				.about_menuitem {
					font-size: 10px;
				}

				.close-video {

				}
				.video-player iframe {
					width: 80%;
					height: auto;
				}

				.projekte-page .projects_centralarea .sns-list img {
    margin-left: 5px;
    margin-right: 5px;
	width:26px;
		
				}
			}
		</style>

		<!-- JavaScript Vendor -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
		<script type="text/javascript" src="/assets/js/modernizr.js"></script>
		<script src="/assets/js/waypoint.js"></script>
		<script>
			jQuery(document).ready(function() {
				function detectmob() {
					if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
						return true;
					} else {
						return false;
					}
				}
				if (detectmob()) {
					jQuery('.w-slider-arrow-left.w-clearfix.arrow_previous_projects_wrapper').removeAttr('data-ix');
					jQuery('.w-slider-arrow-right.w-clearfix.arrow_next_projects_wrapper').removeAttr('data-ix');
				}
			});
		</script>
		<script type="text/javascript">
			var BASE_URL = "http://www.danielspatzek.com/";
		</script>

		<script src="/assets/js/site_dnlsptzk.js"></script>
		<script src="/assets/js/custom.js"></script>
		<script src="/assets/js/custom_webflow.js" id="webfloJSRemove"></script>



		
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
	</head>
	<body>    <div class="w-section intro" data-ix="intro-bg">
        <div class="w-clearfix intro_wrapper" data-ix="intro-slideup">
			<div style="width: 160px;" style="position: relative;">
	            <div class="intro_logo" data-ix="new-interaction"></div>

				<div class="intro_mask" data-ix="intro-unmask" style="position: absolute;"></div>
			</div>
        </div>
    </div>

	<!--Page Main Menu -->
    <div class="newsblog_homeitem_wrapper">
		<a class="newsblog_homeitem" href="/#" data-ix="newsblog-home">HOME</a>
    </div>
    <div class="newsblog_menuitem_wrapper" data-ix="initial-slide-newsblog">
        <div class="newsblog_menuitem_innerwrapper" data-ix="newsblog">
			<a class="newsblog_menuitem" href="/#">ABOUT</a>
        </div>
    </div>
    <div class="contact_homeitem_wrapper">
		<a class="contact_homeitem" href="/#" data-ix="contact-home">HOME</a>
    </div>
    <div class="contact_menuitem_wrapper" data-ix="initial-slide-contact">
        <div class="contact_menuitem_innerwrapper" data-ix="contact">
			<a class="contact_menuitem" href="/#">VISUAL</a>
        </div>
    </div>
    <div class="projects_homeitem_wrapper">
        <div class="projects_homeitem_innerwrapper">
			<a class="projects_homeitem" href="/#" data-ix="projects-home">HOME</a>
        </div>
    </div>
    <div class="projects_menuitem_wrapper" data-ix="initial-slide-projects">
        <div class="projects_menuitem_innerwrapper" data-ix="projects">
			<a class="projects_menuitem" href="/#">CONTACT</a>
        </div>
    </div>
    <div class="about_homeitem_wrapper">
		<a class="about_homeitem" href="/#" data-ix="about-home">HOME</a>
    </div>
    <div class="about_menuitem_wrapper" data-ix="initial-slide-about">
        <div class="about_menuitem_innerwrapper" data-ix="about">
			<a class="about_menuitem" href="/#">MUSIC</a>
        </div>
    </div>
    <div class="megawrapper">
        <div class="w-section home-page">
            <div class="home_logo" data-ix="ontro-logo" style="pointer-events:none;"></div>
			<table style="width: 100%; height: 100%;">
				<tr>
					<td style="text-align: center; vertical-align: middle;">
						<img src="/assets/contact-logo.png" class="dpr-logo"/>
					</td>
				</tr>
			</table>
        </div>

		<div class="w-section about-page">
	<div class="about_centralarea">

		<div class="artist-list">
											<div class="artist"  id="first-artist">
					<div class="artist-container">
						<div class="artist-title futura" style="text-align:center">
							<img src="/assets/live_logo.png" style="display:inline-block; margin-left: auto; margin-right:auto; height: 36px;"/>
						</div>
						<!--/.artist-title-->
						<div class="artist-image" style="text-align: center;">
							<img src="/assets/profile.png" style="height: 240px; width: auto; display:inline-block; margin-left: auto; margin-right:auto;"/>
						</div>
						<!--/.artist-title-->
						<div class="artist-sns-list">
							<a href="https://soundcloud.com/dreamperfectregime">
								<img src="/assets/soundcloud7.png"/>
							</a>
							<a href="https://www.youtube.com/channel/UCtG5oKSlksz-QmD_2uI4WBw">
								<img src="/assets/youtube30.png"/>
							</a>
							<a href="https://twitter.com/_dprlive">
								<img src="/assets/logo22.png"/>
							</a>
							<a href="https://www.facebook.com/DPRLIVE/">
								<img src="/assets/sns5.png"/>
							</a>
							<a href="http://instagram.com/dprlive"> 
								<img src="/assets/instagram19.png"/>
							</a>
						</div>
						<!--/.artist-sns-list-->
					</div>
				</div>
					</div>

	</div>
</div>

<script>
	$(function() {
		$(".artist-list").slick({
			slidesToShow: 1,
			slidesToScroll: 1
		});

		$(".slick-prev").html('');
		$(".slick-next").html('');

		setTimeout(function() {
			var heart = $(".about_centralarea").height(); //842
			var inter = $(".artist-list").height(); //298
			var remaining = (heart - inter)/2;// 272

			$(".artist-list").css("marginTop", remaining);
		}, 3000);
	});
</script>

<style>
.slick-prev {
	width: 20px;
	height: 20px;
	border: 0px;
    position: absolute;
    border: 0px;
    bottom: -50px;
    left: 15px;
	background-color: white;
	background-size: cover;
	background-image: url('/assets/left11.png');
}
.slick-next {
	width: 20px;
	height: 20px;
	border: 0px;
    position: absolute;
    border: 0px;
    bottom: -50px;
    right: 15px;
	background-color: white;
	background-size: cover;
	background-image: url('/assets/right11.png');
}

.artist {
	overflow: hidden;

}
.artist .artist-container {
}
.artist .artist-container .artist-title {
	display: block;
	font-size: 30px;
	font-weight: normal;
	color: black;
	letter-spacing: 15px;
	text-align: center;
}
.artist .artist-container .artist-image {
	display: block;
	padding-top: 20px;
	padding-bottom: 20px;
}
.artist .artist-container .artist-image img {
	width: 100%;
}
.artist .artist-container .artist-sns-list {
	display: block;
	font-size: 0px;
	text-align: center;
}
.artist .artist-container .artist-sns-list img {
	display: inline-block;
	width: 40px;
	margin-left: 5px;
	margin-right: 5px;
}
@media (max-width: 479px) {
	.artist .artist-container .artist-sns-list img {
		display: inline-block;
		width: 20px;
		margin-left: 5px;
		margin-right: 5px;
	}


	.slick-prev {
		width: 25px;
		height: 25px;
	}
	.slick-next {
		width: 25px;
		height: 25px;
	}
}
</style>
		<div class="w-section projekte-page">
	<div class="projects_centralarea">
		<table>
			<tr>
				<td>
					<div class="sns-list">
						<a href="https://soundcloud.com/dreamperfectregime">
							<img src="/assets/soundcloud7.png"/>
						</a>
						<a href="https://www.instagram.com/dpr_official/">
							<img src="/assets/instagram19.png"/>
						</a>
						<a href="mailto:dreamperfectregime@gmail.com">
							<img src="/assets/email131.png"/>
						</a>
						<a href="https://www.facebook.com/DPREGIME/">
							<img src="/assets/sns5.png"/>
						</a>
						<a href="https://www.youtube.com/channel/UCtG5oKSlksz-QmD_2uI4WBw">
							<img src="/assets/youtube30.png"/>
						</a>
					</div>
					<!--/.sns-list-->
				</td>
			</td>
		</table>
	</div>
</div>
		<div class="w-section contact-page">
	<div class="contact_centralarea futura">
		<ul class="video-list">
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('221701482');">
					<div class="video-container">
						<img src="/assets/uploads/8307ba47e04acd1af8ef12e70b61f0a1.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										DPR x NIKE - 'JUST DREAM IT’ 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('218101172');">
					<div class="video-container">
						<img src="/assets/uploads/46e90733c1b7bc80a180bb94904a86d2.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										LOCO - MOVIE SHOOT ( ft. DPR LIVE )									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('210956682');">
					<div class="video-container">
						<img src="/assets/uploads/f879778b8b171a4323c86921dd58f167.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										DPR LIVE - Cheese & Wine M/V									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('207619512');">
					<div class="video-container">
						<img src="/assets/uploads/6159035720f18aabc707271d98ac0687.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										DPR LIVE - Laputa (ft. CRUSH) M/V									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('208099874');">
					<div class="video-container">
						<img src="/assets/uploads/b3d43e774569007ea24eab4783cdae93.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										DPR LIVE - Right Here Right Now (ft. LOCO, JAY PARK) M/V									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('206701308');">
					<div class="video-container">
						<img src="/assets/uploads/bb0792de09130be9188907cd28519d3c.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										DPR LIVE - Please (ft. KIM HYO EUN, G2, DUMBFOUNDEAD) M/V									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('205867311');">
					<div class="video-container">
						<img src="/assets/uploads/4b00a602c67f351ad7be0befd93a0661.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										DPR LIVE - Know Me (ft. DEAN) M/V									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('181766396');">
					<div class="video-container">
						<img src="/assets/uploads/872fe6341afe09d2c0be5b04d28331be.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										MINO - ? (BODY) M/V 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('181654030');">
					<div class="video-container">
						<img src="/assets/uploads/dbfe130260bc7885c83c35320c767cc9.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										BOBBY - ?? (HOLUP!) M/V									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('172584947');">
					<div class="video-container">
						<img src="/assets/uploads/d31acba277116eab5653199f49191777.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										DPR LIVE - ?? (THIRST) M/V 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('168928762');">
					<div class="video-container">
						<img src="/assets/uploads/ef42134b254218d383ba98afab3329f8.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										DPR LIVE - GOD BLESS M/V (ft. PUNCHNELLO)									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('163305996');">
					<div class="video-container">
						<img src="/assets/uploads/c97df526ca71e0b2f18305488f4a5465.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										EUNG FREESTYLE (??????) - LIVE, SIK-K, PUNCHNELLO, OWEN OVADOZ, FLOWSIK									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('155379746');">
					<div class="video-container">
						<img src="/assets/uploads/8d6d60e8c5b600439543dc0123d978aa.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										SIGNALS - (CONCEPT VIDEO) 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('148399355');">
					<div class="video-container">
						<img src="/assets/uploads/bcb2b30b6659c5a7901a421cbbdfb02b.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										DPR LIVE - TILL I DIE (M/V) 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('148411669');">
					<div class="video-container">
						<img src="/assets/uploads/f1654b6956a4f2cbcd64c55b869c98a7.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										PHANTOM - COULD YOU BE MINE (M/V) 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('150333445');">
					<div class="video-container">
						<img src="/assets/uploads/fd6fcb0753e3deeb49820baf5d61c511.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										HI-LITE/THE COHORT/SKRILLEX - (RECAP VIDEO) 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('148563997');">
					<div class="video-container">
						<img src="/assets/uploads/95ef191dc93c8d7929d6cd16a6d03191.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										CROOKED - (CONCEPT VIDEO) 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('148422227');">
					<div class="video-container">
						<img src="/assets/uploads/2e78db2c220fd8113c7ab5c01676a060.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										TEAM - (CONCEPT VIDEO) 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('160755747');">
					<div class="video-container">
						<img src="/assets/uploads/3f122cc6386d435beb4d506f7acd5f3f.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										AMBER - BORDERS (M/V)									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('148450050');">
					<div class="video-container">
						<img src="/assets/uploads/13aab68438532eaf72269fab4b1467b5.png"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										2 BODIES - (CONCEPT VIDEO) 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('148423581');">
					<div class="video-container">
						<img src="/assets/uploads/aac22669d17365addecca3ecf3a2a40a.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										HOLLOW - (CONCEPT VIDEO) 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('148384803');">
					<div class="video-container">
						<img src="/assets/uploads/44d8bf0919b678417520af1198b44109.jpg"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										LOST - (CONCEPT VIDEO) 									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
						<li class="aaabbbb">
				<div class="video-item" onclick="onclickOpenVideo('0');">
					<div class="video-container">
						<img src="/assets/uploads/0"/>


						<div class="video-item-title">
							<table>
								<tr>
									<td>
										0									</td>
								</tr>
							</table>
						</div>
						<!--/.video-item-title-->
					</div>
					<!--/.video-container-->

				</div>
				<!--/.video-item-->
			</li>
					</ul>
	</div>
</div>

<style>
	.futura { 
	font-family: Futura,Trebuchet MS,Arial,sans-serif; 
}
	.close-video {
		position: absolute; 
		top: 25px; 
		right: 25px;
		    z-index: 9999999999999999999999999999999999;
	}
	.video-player {
		display: none;
		position: fixed; 
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		z-index: 999999999999999999;
		background-color: rgba(255, 255, 255, 0.6);
	}
	.video-player table {
		width: 100%;
		height: 100%;
	}
	.video-player table td {
		vertical-align: center;
		text-align: center;
	}
	.video-player iframe {
		width: 80%;
		height: 80%;
	}
	.video-list {
		padding-top: 40px;
		padding-left: 0px;
		margin-left: auto;
		margin-right: auto;
		width: 100%;
		font-size: 0px;
		list-style: none;
	}
	.video-list li {
		display: inline-block;
	}
	.video-item {
		margin: 10px;
	}
	.video-item .video-container:hover {
		position: relative;
	}
	.video-item .video-container img {
		max-width: 360px;
		width: 100%;
		height: 100%;
		max-height: 260px;
	}
	.video-item-title table {
		width: 100%;
		height: 100%;
	}
	.video-item-title table td {
		text-align: center;
		vertical-align: middle;
	}
	.video-item .video-container:hover .video-item-title {
		display: block;
	}
	.video-item-title {
		display: none;
		position: absolute;
		top: 0px;
		width: 100%;
    height: 100%;
		left: 0px;
		padding-top: 5px;
		padding-bottom: 10px;
		font-size: 14px;
		color: white;
		background-color: rgba(0,0,0,0.7);
		font-weight: bold;
		text-align: center;
	}
</style>

<script>
	$(function() {
		videoResize();
		$(window).resize(videoResize);

		setTimeout(videoResize, 5000);
	});
	var videoResize = function() {
		var b = $(".aaabbbb").width() + 1;
		var w = $(".contact_centralarea").width();
		var c = (w/b);
		c = Math.floor(c);
		console.log(w + " " + c + " " + b);

		if ( c >3 ) {
			c = 3;
		}
		
		if ( c <= 1 ) {
			$(".video-list").css("text-align", "center");
			$(".video-list").css("width", "auto");
		} else {
			$(".video-list").css("text-align", "left");
			$(".video-list").width( (c*b) );
		}
	}
	var closeVideo = function() {
		$(".video-player").hide();
		$("#iframe-html").html('');
	}
	var onclickOpenVideo = function(aaaa) {
		$(".video-player").show();
		$("#iframe-html").html('<iframe id="video-flyover-frame" src="https://player.vimeo.com/video/'+aaaa+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
	}
</script>		<div class="w-section newsblog-page">
	<div class="newsblog_centralarea">
		<table>
			<tr>
				<td>
					<center>
						<div class="intoruction-mesg khand-light" style="max-width: 330px; text-align: center;">
							<br /><br /><br />
							<img src="/assets/aboutus-logo.png"/><Br />
							< DREAM PERFECT REGIME (DPR) IS AN INDEPENDENT, MULTI-GENRE MUSIC AND VIDEO GROUP. WE CREATE, DIRECT, AND EDIT ALL TYPES OF VISUAL WORK AS WELL AS CURATE ARTISTS STEMMING FROM A WIDE ARRAY OF MUSICAL BACKGROUNDS AND INFLUENCES. BASED IN SEOUL, OUR PRIMARY FOCUS IS TO ENGAGE VIEWERS BY PRODUCING A UNIQUE AND DYNAMIC EXPERIENCE OF BOTH VISUAL AND AUDIO OUTPUT >
							<br /><br /><br /><br /><br />
						</div>
					</center>
				</td>
			</td>
		</table>
	</div>
</div>
    </div>
	
		<div class="video-player">
			<table>
				<tr>
					<td id="iframe-html">
						
					</td>
				</tr>
			</table>
			<img class="close-video" src="/assets/close_icon.png" onclick="closeVideo();"/>
		</div>
		
	</body>
	
	<script type="text/javascript" src="/assets/js/tiltfx.js"></script>
    <script type="text/javascript" src="/assets/js/webflow.js"></script>

</html>