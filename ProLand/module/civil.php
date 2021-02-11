<link rel="stylesheet" type="text/css" href="\style\civil.css">
<div class="civil">
	<div class="wrapper">
		<div class="text">
			ООО «ПроЛандшафт» оказывает полный спектр услуг по благоустройству и озеленению территорий.
<br><br>
Мы выполняем все виды работ по устройству любых типов покрытий пешеходных зон и тротуаров, проезжих частей и парковочных зон, устройству покрытий спортивных комплексов и стадионов, детских игровых площадок. Осуществляем работы по устройству подпорных стенок, уличных лестниц, установку ограждений и малых архитектурных форм. Оказываем услуги по устройству газонов, посадка деревьев, кустарников и цветников, последующий уход за растениями.
		</div>
		<div class="conteiner">
			<?php 
			$civils = civils();
			foreach ($civils as $civil):		
			?>
			<div class="content">
				<div class="img">
					<img src="\img\ico-work.png" alt="">
				</div>
				<div class="text"><?php echo($civil['name']); ?></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>