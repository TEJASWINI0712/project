<?php include('head.php') ?>
<?php include('Menu.php') ?>
<?php include('Connection.php') ?>
<br><br>


<div class="tour-guides section" id="section-4" >
	  <div class="tour-guides-head text-center">
		  <h3>Advertisements</h3>
		  <span></span><img src="images/guide.png" alt=""><span></span>
		  <div class="container">
				<p>My Tour guides are expensive, so first decide what you want to do, whether it's a general tour of a city, a day of hiking, or visiting remote villages in a third-world country. Have a ball-park time allotment in mind, whether it's a half-day, a full-day, or a multi-day experience. Once you have chosen a guide, you'll probably refine your ideas based upon the guide's knowledge.</p>
		  </div>
	  </div>
	  <div class="container">
		<!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		 <div id="owl-demo" class="owl-carousel">
         
         
         
         <?php
$s="select * from advertisement";
$result=mysqli_query($cn,$s);

$n=0;
while($data=mysqli_fetch_array($result))
{
	if($n%4==0)
	{
	?>
         
			  <div class="item text-center guide-sliders">
<?php }?>


	<div class="col-md-3 image-grid">
					 <img src="Admin/addverimages/<?php echo $data[3]; ?>" width="300px" height="150px" >
					
					 <p><a href="#"><?php echo $data[2]; ?></a></p>
				 </div>
				<?php if($n%4==3)
				{?>
            </div>
   
            <?php
				}
			$n=$n+1;
}
?>
            		  </div>
		</div>
</div>
	



