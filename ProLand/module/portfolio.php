<link rel="stylesheet" type="text/css" href="\style\portfolio2.css">
<div class="portfolio">
	<div class="wrapper">
		<div class="row">
			<?php 
				$works = works();
				foreach ($works as $work):
			?>
			<div class="conteiner">
				<div class="img">
					<img src="\img\our-work-module\<?php echo(work_img1($work['id'])) ?>" >
				</div>
				<div class="content">
					<h1><?php echo($work['title']) ?></h1>
					<div class="text">
						<?php echo($work['description']) ?>
					</div>
					<div class="button"><a href="work-page.php?id=<?php echo($work['id']) ?>" class="knopka">Подробнее</a></div>
				</div>
			</div>
			<?php 
				endforeach;
			?>
		</div>
	</div>
</div>