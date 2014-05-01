<html>
<head>	 
</head>
<body>
<!--[if IE]>
   <div class="purchasebox">
<![endif]-->
<![if !IE]>
  <div class="purchasebox" data-uk-scrollspy="{cls:'uk-animation-fade'};">
<![endif]>
 	<div class="purchaseboxleft">
	<?php
	if($haspurchaseheading)
	{?>
		 <?php echo $PAGE->theme->settings->purchaseheading ?> 
		<?php
	}?>		 
	</div>
	<div class="purchaseboxright">
	<?php
	if($haspurchasebtntext)
	{?>
		 <a href="<?php echo $PAGE->theme->settings->purchasebtnurl ?>" id="button"><?php echo $PAGE->theme->settings->purchasebtntext ?></a>
		<?php
	}?>
		
	</div>	
</div>
</body>
</html>
  
