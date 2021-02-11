<?php 
	$work = work($_GET['id']);
	$imgs = work_img($work['id']);
?>
<link rel="stylesheet" type="text/css" href="\style\work-page.css">
<div class="work-page">
	<div class="wrapper">

		<div class="slideshow-container">
		<?php 
			foreach ($imgs as $img):
		?>
			<div class="mySlides fade">
			  <img src="\img\our-work-module\<?php echo($img['scr']) ?>" style="width:100%">
			</div>
		<?php endforeach; ?>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>

		<div style="margin-top: -30px;position: absolute;left: 50%; transform: translate(-50%,0);">

		<?php 
			$i = 0;
			foreach ($imgs as $img):
		?>
			<span class="dot" onclick="currentSlide($i)"></span> 
		<?php 
			$i++;
			endforeach;
		?>
		</div>

		<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		}
		</script>
		
		<div class="text">
			<h1><?php echo($work['title']) ?></h1>

<?php echo($work['text']) ?>

		</div>
	</div>
</div>