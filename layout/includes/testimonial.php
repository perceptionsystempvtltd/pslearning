<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>	 
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!--[if IE]>
	<script src="https://s3.amazonaws.com/assets.healcode.com/javascripts/jquery.js" type="text/javascript"></script>
    <script type="text/javascript">var hcjq = jQuery.noConflict(true);</script>	
<![endif]-->
</head>
<body>
<div class="testi_sepicon"><img src="<?php echo $testsicon ?>" ></div>
  <div id="slider_content">	
			<div class="testi_title">
				<h2>
					<?php
					if($hastestimonialtitle)
					{?>
						<?php echo $PAGE->theme->settings->testimonialtitle ?>
						<?php
					}
					else
					{?>
						Testimonial
						<?php
					}
					?>
				</h2>
			</div>
		    <div class="ocarousel example_info">
			    <div class="ocarousel_window">.
				    <div class="slidercontent">	
						<?php
						if($hastestimonialcontent1)
						{?>					
							<?php echo $PAGE->theme->settings->testimonialcontent1;?>
							<?php
						}
						else
						{?>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							<?php
						}
						?>			        
						<h4>
						<?php
						if($hastestimonialname1)
						{?>
							<?php echo $PAGE->theme->settings->testimonialname1;?> ,
							<?php
						}
						else
						{?>
							Atul
							<?php							
						}								
						if($hastestimonialcompanyname1)
						{?>					
							<?php echo $PAGE->theme->settings->	testimonialcompanyname1;?> 
							<?php
						}
						else
						{?>
							Perception System
							<?php
						}
						?>
						</h4>
					</div>
				     <div class="slidercontent">	
						<?php
						if($hastestimonialcontent2)
						{?>					
							<?php echo $PAGE->theme->settings->testimonialcontent2;?>
							<?php
						}
						else
						{?>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							<?php
						}
						?>			        
						<h4>
						<?php
						if($hastestimonialname2)
						{?>
							<?php echo $PAGE->theme->settings->testimonialname2;?> ,
							<?php
						}
						else
						{?>
							Raj
							<?php							
						}								
						if($hastestimonialcompanyname2)
						{?>					
							<?php echo $PAGE->theme->settings->	testimonialcompanyname2;?> 
							<?php
						}
						else
						{?>
							Perception System
							<?php
						}
						?>
						</h4>
					</div>
					<div class="slidercontent">	
						<?php
						if($hastestimonialcontent3)
						{?>					
							<?php echo $PAGE->theme->settings->testimonialcontent3;?>
							<?php
						}
						else
						{?>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							<?php
						}
						?>			        
						<h4>
						<?php
						if($hastestimonialname3)
						{?>
							<?php echo $PAGE->theme->settings->testimonialname3;?> ,
							<?php
						}
						else
						{?>
							Jayesh
							<?php							
						}								
						if($hastestimonialcompanyname3)
						{?>					
							<?php echo $PAGE->theme->settings->	testimonialcompanyname3;?> 
							<?php
						}
						else
						{?>
							Perception System
							<?php
						}
						?>
						</h4>
					</div>
					<div class="slidercontent">	
						<?php
						if($hastestimonialcontent4)
						{?>					
							<?php echo $PAGE->theme->settings->testimonialcontent4;?>
							<?php
						}
						else
						{?>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
							when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							<?php
						}
						?>			        
						<h4>
						<?php
						if($hastestimonialname4)
						{?>
							<?php echo $PAGE->theme->settings->testimonialname4;?> ,
							<?php
						}
						else
						{?>
							Nikunj
							<?php							
						}								
						if($hastestimonialcompanyname4)
						{?>					
							<?php echo $PAGE->theme->settings->	testimonialcompanyname4;?> 
							<?php
						}
						else
						{?>
							Perception System
							<?php
						}
						?>
						</h4>
					</div>
				</div>
				<div class="sepline"><img src="<?php echo $testsline ?>" ></div>
			    <br />			    
			    <div class="ocarousel_indicators"></div>
		    </div>
		</div>    	 
	</body>
</html>

