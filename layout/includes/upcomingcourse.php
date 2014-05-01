<html>
<head>	  
	 <script type="text/javascript" src="<?php echo $CFG->wwwroot.'/theme/pslearning/javascript/jquery.circliful.min.js' ?>"></script>
</head>
<body>
<div class="upcourse_sepicon">
		<?php
		if ($hasupcoingicon) 
		{?>
			<img src="<?php echo $upcomingsicon ?>" alt="Image">
			<?php
		}
		?>
</div>
<!--[if IE]>
  <div class="upcominghead">	
<![endif]-->
<![if !IE]>
 <div class="upcominghead" data-uk-scrollspy="{cls:'uk-animation-fade', delay:150}">	
<![endif]>
	<div class="upheadtitle">
		<h4>
		<?php
		if ($hasupcoursetitle) 
		{?>
			<?php echo $PAGE->theme->settings->upcoursetitle ?>
			<?php
		}
		?>				
		</h4>
		<?php
		if ($hasupcoursecontent) 
		{?>
			<?php echo $PAGE->theme->settings->upcoursecontent ?>
			<?php
		}
		?> 
			
	</div>
</div>

<div class="upcoming-course" >
	<div class="courseleft">
		<div class="viewcourse">
			<a class="courselink" href="<?php echo $CFG->wwwroot ?>/course/index.php">
			<div id="viewcourse" data-dimension="205" data-width="15" data-fontsize="38" data-percent="100" data-fgcolor="#1A91D6" data-bgcolor="#eee" data-uk-scrollspy="{cls:'uk-animation-fade', delay:150,repeat: true}"></div>
			</a>
			

		</div>
		<div class="searchcourse">
			    <form action="<?php echo $CFG->wwwroot ?>/course/search.php" method="get">
				   <input type="text" name="search" size="12"  onBlur="if(this.value=='') this.value='Course search'" onFocus="if(this.value=='Course search') this.value='';" value="Course search" /> 
			   </form>
 		</div>
	</div>
	<div class="courseright">		
		<?php
		
		global $DB;			
			$courselist=$DB->get_records_sql('SELECT * FROM  '.$CFG->prefix.'course LIMIT 1,4');				 
			foreach($courselist as $singlecourse)
			{
				$dt=$singlecourse->startdate;
				$sdate = date("d-m-Y", ($dt + 36000)); 
				$fullname=$singlecourse->fullname;
				$summary=$singlecourse->summary;
				$sumlen=strlen($summary);
				$sumresult = substr($summary, 0, 200);
				?>
				<div class="coursesbox">					
					<div class="datediveded">
						<diV class="sdate">
						<?php					
							echo($sdate);
						?> 
						</diV>
						<div class="diveded"></div>
					 </div>
					<div class="coursecontent">
						 <a href="<?php echo $CFG->wwwroot ?>/course/view.php?id=<?php echo $singlecourse->id ?>">
						<?php		
							echo $fullname;
						?></a>
						 				 
						<?php
							if($sumlen<=200)
							{
								echo $summary;
							}
							else
							{
								echo "$sumresult" . '  . . . . .';
							}
						?>						
					</div>					
				</div>
				<?php
			}	 		

		?> 
		</div>	
	</div>
<script>
$( document ).ready(function() {        
		$('#viewcourse').circliful();
    });
</script> 
 

</body>
</html>
