<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Bimbingan Belajar Wisdom" />
        <meta property="og:title" content="Bimbingan Belajar Wisdom"/>
        <meta property="og:url" content="Bimbingan Belajar Wisdom"/>
        <meta property="og:image" content=""/>
        <meta property="og:site_name" content="Bimbingan Belajar Wisdom"/>
        <meta property="og:description" content="Bimbingan Belajar Wisdom (Bimbel wisdom Batam)
		Lembaga Bimbingan Belajar Wisdom berada di Komplek Baloi Abadi Blok A No. 1 dan 2. Bimbingan Belajar Wisdom didirikan pada tahun 2010 bulan Mei, Bimbingan Belajar Wisdom bergerak dibidang pendidikan non formal dengan menyediakan jasa bimbingan belajar mata pelajaran sekolah bagi murid-murid Playgroup, TK (Taman kanak-kanak), dan SD (sekolah dasar), serta menyediakan jasa kursus Mandarin dan kursus bahasa Inggris."
		/>
		
        <title>Bimbingan Belajar Wisdom</title>
		<link href="images/icontitle.PNG" rel="shortcut icon" />
		
		<script type="text/javascript" src="JS/jquery.min.js"></script>
		<script type="text/javascript" src="JS/fancybox/jquery.fancybox.js"></script>
		<script type="text/javascript" src="JS/fancybox/jquery.mousewheel.js"></script>
		<link rel="stylesheet" type="text/css" href="JS/fancybox/jquery.fancybox.css" media="screen" />
		<script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		</script>

		<!--Link untuk Galerry-->
		<link href="style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="JS/tooltip.js"></script>
		
		
		<script type="text/javascript" src="tinymce/tiny_mce.js"></script>
			<script type="text/javascript">
				tinyMCE.init({
				// General options
					mode : "textareas",
					theme : "advanced",
				});
		</script>
	<link rel="stylesheet" href="css/custom.css" type="text/css" media="screen" /> 
	<script type="text/javascript" src="control/jquery-1.7.1.min.js"></script>
	<script src="control/scrolltotop/js/easing.js" type="text/javascript"></script>
	<script src="control/scrolltotop/js/jquery.ui.totop.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="control/scrolltotop/css/ui.totop.css" type="text/css" media="screen" /> 
	<link rel="stylesheet" type="text/css" href="control/smoothmenu/ddsmoothmenu.css" />
	<script type="text/javascript" src="control/smoothmenu/ddsmoothmenu.js"></script>
	<script type="text/javascript">
		ddsmoothmenu.init({
			mainmenuid: "smoothmenu1", //menu DIV id
			orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
			classname: 'ddsmoothmenu', //class added to menu's outer DIV
			//customtheme: ["#207500", "#7ab71c"],
			contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
		});
		$(document).ready(function() {
			$("#smoothmenu1 ul li ul").css({'top':'32px'});
		});
	</script>

	<script type="text/javascript" src="control/jquery-ui-1.8.16.custom.min.js"></script>

	<link rel="stylesheet" type="text/css" media="screen" href="control/slider/liquid-slider-1.1.css">
	<script src="control/slider/jquery.liquid-slider-1.1.min.js"></script>

	<link href="control/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
	<script src="control/facebox/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('a[rel*=facebox]').facebox({
				loadingImage : 'control/facebox/loading.gif',
				closeImage   : 'control/facebox/closelabel.png'
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#message_choose').change(function() {
				$('#message_loading').show();
				$('#message_content').load('message_contentf493.html?messageid='+this.value, function(){
					$('#message_loading').hide();
					$('#message_content').height($('#message_content_load').height());
				});
			});
			
			$('#gallery_choose').change(function() {
				$('#gallery_loading').show();
				$('#gallery_content').load('gallery_content9cbc.html?galleryid='+this.value, function(){
					$('#gallery_loading').hide();
					$('#gallery_content').height($('#gallery_content_load').height());
				});
			});
			
			$('p').each(function() {
				var $this = $(this);
				if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
					$this.remove();
			});
			
		});
	</script>

	<link rel="stylesheet" href="control/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
	<script src="control/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>      
	  <script>
				$(function() {
					$('#slider-id').liquidSlider({
						dynamicArrows: false,
						dynamicTabs: false,
						crossLinks: true,
						slideEaseDuration: 2000
					});
				});
	  </script> 
        <script type="text/javascript" src="control/moveobj.js"></script>
        <script type="text/javascript">
            //Step 1: Define unique variable names depending on number of flying images (ie:1):
            var flyimage1
            function pagestart() {
                //Step 2: Using the same variable names as 1), add or delete more of the below lines (72=width, height=51 of image):
                flyimage1 = new Chip("flyimage1", 72, 51);
                //Step 3: Using the same variable names as 1), add or delete more of the below lines:
                movechip("flyimage1");
            }

            if (window.addEventListener)
                window.addEventListener("load", pagestart, false)
            else if (window.attachEvent)
                window.attachEvent("onload", pagestart)
            else if (document.getElementById)
                window.onload = pagestart

        </script>
    </head>
    <body>	
        <div id="fb-root"></div>
        <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "../connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Step 4: Define your flying images. For each image's ID tag, use the same variable names as 1) above -->
        <DIV ID="flyimage1" STYLE="position:absolute; left: -500px; width:72; height:51;z-index:900;">
            <A HREF="#"><IMG SRC="images/bird.gif" BORDER=0></a>
        </DIV>

        <div id="header">            
            <div id="field-head-logo"><a href="index.php"><img src="images/logo.png"></a></div>
            <div id="field-head-content">
                <div style="position:absolute; top:39px; right:224px;"><a href="https://www.facebook.com/pages/Bimbingan-Belajar-Wisdom/1537342929910637" target="_blank"><img src="images/icon_facebook.png" style="border:0;"></a></div>
                <div style="position:absolute; top:39px; right:185px;"><a href="https://www.instagram.com/p/7QZJIitnoC/" target="_blank"><img src="images/icon_instagram.png" style="border:0;"></a></div>
                <div style="position:absolute; top:10px; right:0px;">
                    <div class="fb-like" data-href="https://www.facebook.com/doristan.22" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                </div>
				<div style="position:absolute; top:60px; right:5px;"><a href="ztest/portal/index.php"><img src="images/login-2.png" style="border:0;"></a></div>
            </div>
            <div id="field-head-nav">
                <div id="ddsmoothmenu" class="ddsmoothmenu">
                    <ul>
                        <li><a href="index.php"><span>HOME</span></a></li>
                        <li><a href="program.php"><span>LEARNING PROGRAM</span></a></li>
                        <li><a href="galery.php"><span>GALLERY</span></a></li>
						<li><a href="about.php"><span>ABOUT US</span></a></li>
                        <li><a href="contact.php"><span>CONTACT</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
<div id="content">
    <div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("a[rel^='prettyPhoto']").prettyPhoto({
                    theme: 'light_square', /* light_square / light_rounded / dark_rounded / light_square / dark_square */
                    social_tools: false,
                    allow_resize: true
                });
            });
        </script>

        <link rel="stylesheet" href="control/nivo/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="control/nivo/nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="control/nivo/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
                    effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
                    slices: 15, // For slice animations
                    boxCols: 8, // For box animations
                    boxRows: 4, // For box animations
                    animSpeed: 1000, // Slide transition speed
                    pauseTime: 5000, // How long each slide will show
                    startSlide: 0, // Set starting Slide (0 index)
                    directionNav: true, // Next & Prev navigation
                    controlNav: false, // 1,2,3... navigation
                    controlNavThumbs: false, // Use thumbnails for Control Nav
                    pauseOnHover: true, // Stop animation while hovering
                    manualAdvance: false, // Force manual transitions
                    prevText: 'Prev', // Prev directionNav text
                    nextText: 'Next', // Next directionNav text
                    randomStart: false, // Start on a random slide
                    beforeChange: function() {
                    }, // Triggers before a slide transition
                    afterChange: function() {
                    }, // Triggers after a slide transition
                    slideshowEnd: function() {
                    }, // Triggers after all slides have been shown
                    lastSlide: function() {
                    }, // Triggers when last slide is shown
                    afterLoad: function() {
                    } // Triggers when slider has loaded
                });
            });
        </script>

