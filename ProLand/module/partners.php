<link rel="stylesheet" type="text/css" href="\style\partners.css">
<div class="partners">
	<div class="wrapper">
		<div class="line">
			<h2>Партнеры</h2>
		</div>
		<?php  
			$partners = partners();
		?>
		<div class="conteiner">
			<?php foreach ($partners as $partner):?>
				<div class="content"><img src=<?php echo($partner['scr']); ?> alt=<?php echo($partner['name']); ?>></div>
			<?php endforeach;  ?>
		</div>
	</div>
</div>