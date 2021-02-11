<meta charset="utf-8">
<?php
include 'db.php';
$delete = R::load($_GET["dbname_del"],$_GET["id_del"]);
R::trash($delete);
echo("<script>location.href='admin.php?dbname=$_GET[dbname]'</script>");
 ?>