<?php 
	$row = get_row($_GET[dbname],$_GET[id]);
?>
<link rel="stylesheet" type="text/css" href="\..\style\admin\editing.css">
<div class="editing">
	<div class="wrapper">
		<form method="post" action="admin-save.php?dbname=<?php echo($_GET[dbname])?>">
			<table>
				<tr><th>Название колонки</th><th>Содержимое</th></tr>
				<?php $i=0;foreach ($row as $key):?>
					<tr><td><?php echo(array_keys($row)[$i]); ?></td><td><textarea type="text" name="<?php echo(array_keys($row)[$i]);$i++; ?>"><?php echo($key) ?></textarea></td></tr>
				<?php endforeach; ?>
			</table>
			<center>
				<button type="sabmit">Сохранить</button>
				<a href="admin.php?dbname=<?php echo($_GET[dbname])?>"><button type="button">отмена</button></a>
			</center>
		</form>
		<?php if ($_GET[dbname] == "work"):?>
			<?php  
				$imgs = get_img($_GET[id]);
			?>
			<div class="img">
				<center><h3>Прикрепленные изображения</h3></center>
				<table>
					<tr><th>Изображение</th><th>Удалить</th></tr>
					<?php foreach ($imgs as $key):?>
						<tr><td><img src="\..\..\img\our-work-module\<?php echo($key[scr]) ?>"></td><td><a href="admin-del.php?dbname=<?php echo($_GET[dbname]) ?>&id=<?php echo($_GET[id]) ?>&dbname_del=work_img&id_del=<?php echo($key[id]) ?>"><button>Удалить</button></a></td></tr>
					<?php endforeach; ?>
				</table>
				<form action="admin-save-img.php?dbname=<?php echo($_GET[dbname])?>&id=<?php echo($_GET[id]) ?>" method="post" enctype="multipart/form-data">
					<center>
						<input type="file" name="scr">
						<button type="submit">сохранить</button>
					</center>
				</form>
			</div>
		<?php endif; ?>
	</div>
</div>