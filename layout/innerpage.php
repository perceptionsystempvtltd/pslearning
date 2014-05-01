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

$hastestimage = (!empty($PAGE->theme->settings->testimonialseparatoricon));
$hastestline = (!empty($PAGE->theme->settings->testimonialseparatorline));
$hasupcoingicon = (!empty($PAGE->theme->settings->upcourseseparatoricon));

$hasgmailicon = (!empty($PAGE->theme->settings->gmailicon));
$hasfacebookicon = (!empty($PAGE->theme->settings->facebookicon));
$hastwittericon = (!empty($PAGE->theme->settings->twittericon));
$hasskypeicon = (!empty($PAGE->theme->settings->skypeicon));

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
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
if ($hasupcoingicon) 
{
    $upcomingsicon = $PAGE->theme->setting_file_url('upcourseseparatoricon', 'upcourseseparatoricon');
}
if ($hastestimage) 
{
    $testsicon = $PAGE->theme->setting_file_url('testimonialseparatoricon', 'testimonialseparatoricon');
}
if ($hastestline) 
{
    $testsline = $PAGE->theme->setting_file_url('testimonialseparatorline', 'testimonialseparatorline');
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
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>     
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $CFG->wwwroot.'/theme/pslearning/javascript/jquery.min.js' ?>"></script>	
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
	<style type="text/css">		
	#page-header-inner
	{
			display:none;
			height:100% !important;
	}
	.nav
	{
		border-top-left-radius:0px !important;;
		border-top-right-radius:0px !important;;  
		border-bottom-left-radius:15px;
		border-bottom-right-radius:15px;  
		border:1px solid #EBEBEB;
	}	
	</style> 
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php p($PAGE->bodyid); ?>" class="<?php p($PAGE->bodyclasses); ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="innerpage">
 <?php if ($hasheading || $hasnavbar) { ?>
    <div id="page-header">         
        <div id="page-header-inner">		 
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
        <?php } ?>     

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
