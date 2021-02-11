<?php 
	$row = get_row_add($_GET[dbname]);
?>
<link rel="stylesheet" type="text/css" href="\..\style\admin\editing.css">
<div class="editing">
	<div class="wrapper">
		<form method="post" action="admin-save.php?dbname=<?php echo($_GET[dbname])?>">
			<table>
				<tr><th>Название колонки</th><th>Содержимое</th></tr>
				<?php $i=0;foreach ($row as $key):?>
					<tr>
						<td><?php echo(array_keys($row)[$i]); ?></td>
						<td>
							<textarea name="<?php echo(array_keys($row)[$i]);$i++; ?>"></textarea>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			
			<center>
				<button type="sabmit">Сохранить</button>
				<a href="admin.php?dbname=<?php echo($_GET[dbname])?>"><button type="button">отмена</button></a>
			</center>
		</form>
	</div>
</div>