<html>
<head>
	<script type="text/javascript" src="<?php echo $CFG->wwwroot.'/theme/pslearning/javascript/uikit.js' ?>"></script>
	<script type="text/javascript" src="<?php echo $CFG->wwwroot.'/theme/pslearning/javascript/uikit.min.js' ?>"></script>	 
</head>
<body>
<!--[if IE]>
   <div class="wel-headding">
<![endif]-->
<![if !IE]>
  <div class="wel-headding" data-uk-scrollspy="{cls:'uk-animation-fade', delay:160}">
<![endif]>
 
			<?php
				if($haswelcometitle)
				{?>				
					<h1><?php echo $PAGE->theme->settings->welcometitle;?></h1>					
					<?php
				}
				else
				{?>
					<h1>Welcome to out University</h1>
					<?php
				}
				if($haswelcomesubtitle)
				{?>				
					<h2><?php echo $PAGE->theme->settings->welcomesubtitle;?></h2>					
					<?php
				}
				else
				{?>
					<h2>Committed to student success for over 30 years!</h2>
					<?php
				}
				if($haswelcomecontent)
				{?>				
					 <?php echo $PAGE->theme->settings->welcomecontent;?> 					
					<?php
				}
				else
				{?>
					 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p> 
					<?php
				}
				if($haswelcomebuttontext)
				{?>				
					<a href="<?php echo $CFG->wwwroot ?><?php echo $PAGE->theme->settings->welcomebuttonurl ?>" id="button"><?php echo $PAGE->theme->settings->welcomebuttontext ?></a>
				<?php
				}
				else
				{?>
					<a href="<?php echo $CFG->wwwroot ?><?php echo $PAGE->theme->settings->welcomebuttonurl ?>" id="button">Read More</a>
					<?php
				}?>
		
</div>
</body>
</html>

