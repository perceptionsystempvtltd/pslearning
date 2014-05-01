<div class="socialicon">
	 <?php	 
	if($hasgmailicon)
	{	
		$gmail=$PAGE->theme->settings->gmail;
		if($gmail==1)
		{?>
			<a href="<?php echo $PAGE->theme->settings->gmailurl ?>" id="button"><img src="<?php echo $gmailicon ?> "></a>
			<?php
		}
	}
	if($hasfacebookicon)
	{
	 	 $facebook=$PAGE->theme->settings->facebook;
		if($facebook==1)
		{?>
			<a href="<?php echo $PAGE->theme->settings->facebookurl ?>" id="button"><img src="<?php echo $facebookicon ?> "></a>
			<?php
		}
	}
	if($hastwittericon)
	{
		 $twitter=$PAGE->theme->settings->twitter;
		if($twitter==1)
		{?>
			<a href="<?php echo $PAGE->theme->settings->twitterurl ?>" id="button"><img src="<?php echo $twittericon ?> "></a>
			<?php
		}
	}
	if($hasskypeicon)
	{
		$skype=$PAGE->theme->settings->skype;
		if($skype==1)
		{?>
			<a href="<?php echo $PAGE->theme->settings->skypeurl ?>" id="button"><img src="<?php echo $skypeicon ?> "></a>
			<?php
		}
	}
	?>	  
</div>
<div class="footercopyright">
	<a href="<?php echo $CFG->wwwroot ?>
	<?php
	if($hasprojecturl)
	{?>
		<?php echo $PAGE->theme->settings->projecturl ?>" id="button">
		<?php
	}
	if($hasprojectname)
	{?>
		<?php echo $PAGE->theme->settings->projectname ?>
		<?php
	}	
	?>
	</a>
	<?php
	if($hascopyrights)
	{?>
		<?php echo $PAGE->theme->settings->copyrights ?>&nbsp;&nbsp;&nbsp;|
		<?php
	}
	?>
	<a href="<?php echo $CFG->wwwroot ?>
	<?php
	if($hasprivacypolicyurl)
	{?>
		<?php echo $PAGE->theme->settings->privacypolicyurl ?>" id="button">Privacy Policy
		<?php
	}?>
	</a>
</div>
  
