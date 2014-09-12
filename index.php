<html>
<head>
<link rel="shortcut icon" href="logo.jpg" type="icon" />
<?php
global $pagename, $title;
$pagename='index.php';
$title='EAGE ISM'; 
include('header.php');
?>
<link rel='stylesheet' id='camera-css'  href='camera.css' type='text/css' media='all'>
<script src="js/jquery.js"></script>
<script type='text/javascript' src='jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='camera.min.js'></script>
<script type="text/javascript">
		jQuery(function(){
			
			jQuery('#camera_wrap_2').camera({
				height: '249px',
				loader: 'bar',
				pagination: false,
				thumbnails: false,
				hover:false
			});
		});
</script>
	
	</head>
	
<body>
<div id="templatemo_wrapper">

	<div id="templatemo_header">
        <div id="site_title">

        </div> 
    </div> 
    
    <div id="templatemo_main">
        <marquee behavior="scroll" scrollamount="3" direction="left" onmouseover="this.stop()" onmouseout="this.start()" ><a href="http://www.opendtect.org/osr/" style="text-decoration:none">Students who need 3D seismic, well datafor their dessertation and thesis work can download them from the OSR of OpendTect !! CHECK IT OUT!!..................</a>

<a href="http://www.eage.org/?evp=6099&newsId=127" style="text-decoration:none">International COnference on IT for Geosciences 2012 (20-24 August 2012, Dubna, Russia): Call for Papers dealine-June 1, 2012...........</marquee>
    	
	<?php
    	include('sidebar.php');
		include('sidebar2.php');
    	?>

        <div id="templatemo_content">

		<table width="550" border="0">
		<td width="70%"> 
          		<?php

?></font></p>
          		<br><br><br><div width="385" height="249"><div class="data unselected enlarged" id="gallery-div">
			<div id="photos" style="background: #fff;width: 380px;height: 249px;left: 0%;" >
				<div class="fluid_container">
					<div class="camera_wrap camera_azure_skin" id="camera_wrap_2">
						<div data-thumb="images/slides/thumbs/1.jpg" data-src="images/slides/1.jpg">
							<div class="camera_caption fadeFromBottom" style="font-size:12px;">
							<center>
							Debjani at EAGE 2012 Saint Petersberg meeting, Russia
							</center>
							</div>
						</div>
						<div data-thumb="images/slides/thumbs/2.jpg" data-src="images/slides/2.jpg">
							<div class="camera_caption fadeFromBottom" style="font-size:12px;">
							Debanjan with 2012 SEG Challenge Bowl runners-up award at Las Vegas, Nevada
							</div>
						</div>
						<div data-thumb="images/slides/thumbs/3.jpg" data-src="images/slides/3.jpg">
							<div class="camera_caption fadeFromBottom" style="font-size:12px;">
							<center>
							 MATLAB Worshop - I at AGP Annexe by Deepak Kumar
							</center>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div></div><BR><BR>

		</td>	
		<td width="30%" >

			<?php
	include('newsupdates.php');
	?>


 
		</td>
		</table>	
	
         
          <div class="cleaner_h40"><a href="http://www.houseofgeoscience.org/photocontest"> <img src="images/adver.jpg" width="600px" height="100px"/></a></div>
          
            
            
        
      </div> 
    
    	<div class="cleaner"></div>
    </div> 
    
    <?php
    include('footer.php');
    ?>
</div> 
</body>
</html>
<!-- slideshow on index, login,email,-->
