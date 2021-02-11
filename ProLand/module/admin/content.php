<link rel="stylesheet" type="text/css" href="\..\style\admin\content.css">
<div class="content">
	<div class="wrapper">
		<?php  
			if (isset($_GET["dbname"])) {
				$table = get_table($_GET["dbname"]);
				$table_key = array_keys($table[0])
		?>
				<table>
					<tr>
						<?php foreach ($table_key as $key):?>
							<th><?php echo($key) ?></th>
						<?php endforeach;?>
						<th>Редактирование<br>
							Удаление</th>
					</tr>
					
					<?php foreach ($table as $key0):?>
						<tr>
							<?php  foreach ($key0 as $key1): ?>
								<td><?php echo($key1) ?></td>
							<?php endforeach; ?>
							<td>
								<a href="admin-edit.php? <?php echo"dbname=$_GET[dbname]"."&id=$key0[id]" ?>"><button>Редактирование</button></a>
								<a href="admin-del.php? <?php echo"dbname=$_GET[dbname]"."&id=$key0[id]"."&dbname_del=$_GET[dbname]"."&id_del=$key0[id]"?> "><button>Удаление</button></a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<center><a href="admin-add.php?<?php echo"dbname=$_GET[dbname]"?>"><button>Добавить</button></a></center>
		<?php
		}
			else
			{
				echo"<center><h1>Выбирете таблицу</h1><center>";
			}
		?>
	</div>
</div>