<meta charset="utf-8">
<?php 
include 'db.php';
print_r($_FILES);
print_r($_GET);
echo"<br>";
print_r($_GET);
$name = $_FILES[scr][name];
$tmp_name = $_FILES[scr][tmp_name];
move_uploaded_file($tmp_name , "img/our-work-module/".$name);
$dbname = R::load( "work_img");  
	$dbname[scr] = $name;
	$dbname[id_work] = $_GET[id];
R::store($dbname);
echo("<script>location.href='admin-edit.php?dbname=$_GET[dbname]&id=$_GET[id]'</script>");
?>
