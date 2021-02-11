<meta charset="utf-8">
<?php 
include 'db.php';

$dbname = R::load( $_GET[dbname], $_POST[id] );  

$i=0;
foreach ($_POST as $key=>$elem):
	if ($i!=0) {
		$dbname[$key] = $elem;
	}
	$i++;
endforeach;
R::store($dbname);
echo("<script>location.href='admin.php?dbname=$_GET[dbname]'</script>");
?>
