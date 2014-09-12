<link rel="shortcut icon" href="logo.jpg" type="icon" />
<?php
global $pagename, $title;
$pagename='index.php';
$title='EAGE ISM'; 
include('header.php');
?>
<body>
<style type="text/css">
.scroller
{
height:405px;
overflow-y: scroll;
width:600px;
}
</style>	



<div id="templatemo_wrapper">

	<div id="event_templatemo_header">
        <div id="site_title">

        </div> 
    </div> <!-- end of templatemo_header -->
    
    <div id="templatemo_main">

    	
	<?php
    	include('sidebar.php');
	include('sidebar2.php');
    	?>

        <div id="templatemo_content" style="margin-top:-30px">

	</br></br></br></br>
	<div class="scroller">
	</br>
	</br></div>
	</br>
	</br>
	</br>
	</div>
    
    	<div class="cleaner"></div>
    </div> 
    
    <?php
    include('footer.php');
    ?>
</div> 
</body>
</html>
