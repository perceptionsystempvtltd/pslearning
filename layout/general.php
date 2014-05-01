<?php
$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));
$haslogininfo = (empty($PAGE->layout_options['nologininfo']));

$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));
$haslangmenu = (!empty($PAGE->layout_options['langmenu']));
$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$haslogo = (!empty($PAGE->theme->settings->logo));
$hasheadertexttitle = (!empty($PAGE->theme->settings->headertexttitle));
$hasheadertextdetail = (!empty($PAGE->theme->settings->headertextdetail));

$haswelcometitle = (!empty($PAGE->theme->settings->welcometitle));
$haswelcomesubtitle = (!empty($PAGE->theme->settings->welcomesubtitle));
$haswelcomecontent = (!empty($PAGE->theme->settings->welcomecontent));
$haswelcomebuttontext = (!empty($PAGE->theme->settings->welcomebuttontext));
$haspagebackground = (!empty($PAGE->theme->settings->pagebackground));

$hastestimage = (!empty($PAGE->theme->settings->testimonialseparatoricon));
$hastestline = (!empty($PAGE->theme->settings->testimonialseparatorline));
$hastestimonialtitle = (!empty($PAGE->theme->settings->testimonialtitle));

$hastestimonialcontent1 = (!empty($PAGE->theme->settings->testimonialcontent1));
$hastestimonialname1 = (!empty($PAGE->theme->settings->testimonialname1));
$hastestimonialcompanyname1 = (!empty($PAGE->theme->settings->testimonialcompanyname1));

$hastestimonialcontent2 = (!empty($PAGE->theme->settings->testimonialcontent2));
$hastestimonialname2 = (!empty($PAGE->theme->settings->testimonialname2));
$hastestimonialcompanyname2 = (!empty($PAGE->theme->settings->testimonialcompanyname2));

$hastestimonialcontent3 = (!empty($PAGE->theme->settings->testimonialcontent3));
$hastestimonialname3 = (!empty($PAGE->theme->settings->testimonialname3));
$hastestimonialcompanyname3 = (!empty($PAGE->theme->settings->testimonialcompanyname3));

$hastestimonialcontent4 = (!empty($PAGE->theme->settings->testimonialcontent4));
$hastestimonialname4 = (!empty($PAGE->theme->settings->testimonialname1));
$hastestimonialcompanyname4 = (!empty($PAGE->theme->settings->testimonialcompanyname4));


$hasupcoingicon = (!empty($PAGE->theme->settings->upcourseseparatoricon));
$hasupcoursetitle = (!empty($PAGE->theme->settings->upcoursetitle));
$hasupcoursecontent = (!empty($PAGE->theme->settings->upcoursecontent));

$haspurchaseheading = (!empty($PAGE->theme->settings->purchaseheading));
$haspurchasebtntext = (!empty($PAGE->theme->settings->purchasebtntext));


$hasgmailicon = (!empty($PAGE->theme->settings->gmailicon));
$hasfacebookicon = (!empty($PAGE->theme->settings->facebookicon));
$hastwittericon = (!empty($PAGE->theme->settings->twittericon));
$hasskypeicon = (!empty($PAGE->theme->settings->skypeicon));

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$hasprojecturl = (!empty($PAGE->theme->settings->projecturl));
$hasprojectname = (!empty($PAGE->theme->settings->projectname));
$hascopyrights = (!empty($PAGE->theme->settings->copyrights));
$hasprivacypolicyurl = (!empty($PAGE->theme->settings->privacypolicyurl));

$bodyclasses = array();
if ($showsidepre && !$showsidepost) 
{
    $bodyclasses[] = 'side-pre-only';
} 
else if ($showsidepost && !$showsidepre) 
{
    $bodyclasses[] = 'side-post-only';
} 
else if (!$showsidepost && !$showsidepre) 
{
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) 
{
    $bodyclasses[] = 'has_custom_menu';
}
if ($haslogo) 
{
    $mainlogo = $PAGE->theme->setting_file_url('logo', 'logo');
}
if ($hasheadertexttitle) 
{
    $headertexttitle = $PAGE->theme->setting_file_url('headertexttitle', 'headertexttitle');
}
if ($hasheadertextdetail) 
{
    $headertextdetail = $PAGE->theme->setting_file_url('headertextdetail', 'headertextdetail');
} 
if ($haswelcometitle) 
{
    $welcometitle = $PAGE->theme->setting_file_url('welcometitle', 'welcometitle');
}
if ($haswelcomesubtitle) 
{
    $welcomesubtitle = $PAGE->theme->setting_file_url('welcomesubtitle', 'welcomesubtitle');
}
if ($haswelcomecontent) 
{
    $welcomecontent = $PAGE->theme->setting_file_url('welcomecontent', 'welcomecontent');
}
if ($haswelcomebuttontext) 
{
    $welcomebuttontext = $PAGE->theme->setting_file_url('welcomebuttontext', 'welcomebuttontext');
}
if ($haspagebackground) 
{
    $pagebackground = $PAGE->theme->setting_file_url('pagebackground', 'pagebackground');
}
 

if ($hasupcoingicon) 
{
    $upcomingsicon = $PAGE->theme->setting_file_url('upcourseseparatoricon', 'upcourseseparatoricon');
}
if ($hasupcoursetitle) 
{
    $upcoursetitle = $PAGE->theme->setting_file_url('upcoursetitle', 'upcoursetitle');
}
if ($hasupcoursecontent) 
{
    $upcoursecontent = $PAGE->theme->setting_file_url('upcoursecontent', 'upcoursecontent');
}


if ($haspurchaseheading) 
{
    $purchaseheading = $PAGE->theme->setting_file_url('purchaseheading', 'purchaseheading');
}
if ($haspurchasebtntext) 
{
    $purchasebtntext = $PAGE->theme->setting_file_url('purchasebtntext', 'purchasebtntext');
}


if ($hastestimage) 
{
    $testsicon = $PAGE->theme->setting_file_url('testimonialseparatoricon', 'testimonialseparatoricon');
}
if ($hastestline) 
{
    $testsline = $PAGE->theme->setting_file_url('testimonialseparatorline', 'testimonialseparatorline');
}
if ($hastestimonialtitle) 
{
    $testimonialtitle = $PAGE->theme->setting_file_url('testimonialtitle', 'testimonialtitle');
}

if ($hastestimonialcontent1) 
{
    $testimonialcontent1 = $PAGE->theme->setting_file_url('testimonialcontent1', 'testimonialcontent1');
}
if ($hastestimonialname1) 
{
    $testimonialname1 = $PAGE->theme->setting_file_url('testimonialname1', 'testimonialname1');
}
if ($hastestimonialcompanyname1) 
{
    $testimonialcompanyname1 = $PAGE->theme->setting_file_url('testimonialcompanyname1', 'testimonialcompanyname1');
}

if ($hastestimonialcontent2) 
{
    $testimonialcontent2 = $PAGE->theme->setting_file_url('testimonialcontent2', 'testimonialcontent2');
}
if ($hastestimonialname2) 
{
    $testimonialname2 = $PAGE->theme->setting_file_url('testimonialname2', 'testimonialname2');
}
if ($hastestimonialcompanyname2) 
{
    $testimonialcompanyname2 = $PAGE->theme->setting_file_url('testimonialcompanyname2', 'testimonialcompanyname2');
}

if ($hastestimonialcontent3) 
{
    $testimonialcontent3 = $PAGE->theme->setting_file_url('testimonialcontent3', 'testimonialcontent3');
}
if ($hastestimonialname3) 
{
    $testimonialname3 = $PAGE->theme->setting_file_url('testimonialname3', 'testimonialname3');
}
if ($hastestimonialcompanyname3) 
{
    $testimonialcompanyname3 = $PAGE->theme->setting_file_url('testimonialcompanyname3', 'testimonialcompanyname3');
}

if ($hastestimonialcontent4) 
{
    $testimonialcontent4 = $PAGE->theme->setting_file_url('testimonialcontent4', 'testimonialcontent4');
}
if ($hastestimonialname4) 
{
    $testimonialname4 = $PAGE->theme->setting_file_url('testimonialname4', 'testimonialname4');
}
if ($hastestimonialcompanyname4) 
{
    $testimonialcompanyname4 = $PAGE->theme->setting_file_url('testimonialcompanyname4', 'testimonialcompanyname4');
}

if ($hasgmailicon) 
{
    $gmailicon = $PAGE->theme->setting_file_url('gmailicon', 'gmailicon');
}
if ($hasfacebookicon) 
{
    $facebookicon = $PAGE->theme->setting_file_url('facebookicon', 'facebookicon');
}
if ($hastwittericon) 
{
    $twittericon = $PAGE->theme->setting_file_url('twittericon', 'twittericon');
}
if ($hasskypeicon) 
{
    $skypeicon = $PAGE->theme->setting_file_url('skypeicon', 'skypeicon');
}

if ($hasprojecturl) 
{
    $projecturl = $PAGE->theme->setting_file_url('projecturl', 'projecturl');
}
if ($hasprojectname) 
{
    $projectname = $PAGE->theme->setting_file_url('projectname', 'projectname');
}
if ($hascopyrights) 
{
    $copyrights = $PAGE->theme->setting_file_url('copyrights', 'copyrights');
}
if ($hasprivacypolicyurl) 
{
    $privacypolicyurl = $PAGE->theme->setting_file_url('privacypolicyurl', 'privacypolicyurl');
}


echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
   <title><?php echo $PAGE->title ?></title>     
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="<?php echo $CFG->wwwroot.'/theme/pslearning/style/homepage.css' ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo $CFG->wwwroot.'/theme/pslearning/javascript/jquery.min.js' ?>"></script>	
     <script>
		$(document).ready(function(){
			$("#list").hide();
		  $("#menulink").click(function(){
			$("#list").toggle();
		  });
		});
	</script>
	<script>
		$(window).scroll(function() {
			if ($(this).scrollTop() > 100) { 
				$('#list').css({
					'display': 'none'
				});
			}
		});
	</script>      
     <script type="text/javascript">
		$(document).ready(function() {			 
		   	var stickyNavTop = $('.nav').offset().top;	 
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop(); 		     
			    if (scrollTop > stickyNavTop) { 
			        $('.nav').addClass('sticky');
			    } else {
			        $('.nav').removeClass('sticky'); 
			    }
			};
			stickyNav();			 
			$(window).scroll(function() {
				stickyNav();
			});
		});
	</script>
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php p($PAGE->bodyid); ?>" class="<?php p($PAGE->bodyclasses); ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="page" >
 <?php if ($hasheading || $hasnavbar) { ?>
    <div id="page-header">         
        <div id="page-header-inner">
			<div class="smallmenu">
				<div class="munulist">
					<div id="list"><?php echo $custommenu; ?></div>
				</div>
				<div class="munubtn">
					<a href="javascript:void(0)" id="menulink"><img src="<?php echo $OUTPUT->pix_url('rmenu', 'theme'); ?>" alt="red" /></a>
				</div>
    		
			</div>       
            <div class="headermain" > 
				<div class="logo">
				<?php
				if ($haslogo) 
				{?>
						<a href="<?php echo $CFG->wwwroot; ?>" title="<?php print_string('home'); ?>">
							<img src="<?php echo $mainlogo ?>" alt="Image">
						</a>
				<?php 
				} 
				else 
				{ ?>
					<a  href="<?php echo $CFG->wwwroot; ?>" title="<?php print_string('home'); ?>">
						<img src="<?php echo $OUTPUT->pix_url('logo', 'theme')?>" id="logo">
					</a>
				<?php
				} ?> 
				</div>         
				<!--[if IE]>
				 <div class="headertext">
				<![endif]-->
				<![if !IE]>
				 <div class="headertext" data-uk-scrollspy="{cls:'uk-animation-fade', delay:150}">
				<![endif]>				
				<?php
				if($hasheadertexttitle)
				{?>				
					<h2><?php echo $PAGE->theme->settings->headertexttitle;?></h2>					
					<?php
				}
				else
				{?>
					<h2>One of the best distance Learning website offering A vast selection of courses that you can study at home</h2>
					<?php
				}
				if($hasheadertextdetail)
				{
					 echo $PAGE->theme->settings->headertextdetail;
				}
				else
				{?>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<?php
				}?>
				</div> 
			</div>
	   <div class="headercontent"></div>
            <div class="headermenu">
	  <?php
                 
                if ($haslangmenu) {
                    echo $OUTPUT->lang_menu();
                }
                echo $PAGE->headingmenu
            ?></div>
          <?php } ?>       
                 
        </div><!--//#page-header-inner-->  
        <div class="navigation">
			<?php if ($hascustommenu) { ?>
          <div class="nav">
			
				<div class="small_logo" >
				<a href="<?php echo $CFG->wwwroot; ?>" title="<?php print_string('home'); ?>">
					<img src="<?php echo $OUTPUT->pix_url('small_logo', 'theme'); ?>" alt="red" />
				</a> 
				</div>   	
			
			<div class="menu1">
			<div id="custommenu" >
				<?php echo $custommenu; ?>
			</div>
			<div class="loginout">
			<ul>
				<li>
					<?php
					 if (isloggedin()) 
					 {
					 ?>
							<a href="<?php echo $CFG->wwwroot ?>/login/logout.php">Logout</a>
					 <?php
					 }
					 else
					 {
					 ?>
							<a href="<?php echo $CFG->wwwroot ?>/login/index.php">Login</a>
					 <?php
					 }
					?>
				</li>
				<li>
					<a href="<?php echo $CFG->wwwroot ?>/login/signup.php">Register</a>
				</li>
			</ul>				
			</div>		
		
		</div>
		<div style="clear:both"></div>
	</div>
				
		    
     </div>          
  </div><!-- END OF HEADER -->
        <?php }

	if($haspagebackground)
	{?>				
		<div class="welcome">
 		<?php 	 
			require_once(dirname(__FILE__).'/includes/welcome.php');
		?>
		</div>
		<?php
	}
	else
	{?>
		<div class="welcome" style="background-color:#D8F2FF;">
		<?php
			require_once(dirname(__FILE__).'/includes/welcome.php');
		?>
		</div>
		<?php
	}
?>    


<div class="upcourse">
 <?php 	 
		require_once(dirname(__FILE__).'/includes/upcomingcourse.php');
		
?>	
</div>
<div class="testimonal">
 <?php 	 
		require_once(dirname(__FILE__).'/includes/testimonial.php');
?>	
</div>
<div class="purchase">
 <?php 	 
		require_once(dirname(__FILE__).'/includes/purchase.php');
?>	
</div>
 
</div>
<div>
    <div id="page-content">                    
        <div id="region-main-box">
            <div id="region-post-box">
                <div id="region-main-wrap">
                    <div id="region-main">
                        <div class="region-content">
                            <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
                        </div>
                    </div>
                </div>
                <?php if ($hassidepre) { ?>
                <div id="region-pre" class="block-region">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                    </div>
                </div>
                <?php } ?>

                <?php if ($hassidepost) { ?>
                <div id="region-post" class="block-region">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
<!-- START OF FOOTER -->
<div id="page-footer" class="clearfix">
		<div class="soical">
		<?php 	 
			require_once(dirname(__FILE__).'/includes/soical.php');
		?>	
	</div>      
</div>

</div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
