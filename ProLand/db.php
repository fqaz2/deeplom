<?php
	
	include 'libs/rb-mysql.php';
	R::setup( 'mysql:host=localhost;dbname=deeplom','root', '' );

	function partners()
	{
		return R::getAll('SELECT * FROM partners');
	}

	function beautifications()
	{
		return R::getAll("SELECT * FROM `beautification`");
	}
	
	function civils()
	{
		return R::getAll("SELECT * FROM `civil`");
	}

	function works()
	{
		return R::getAll("SELECT * FROM `work`");
	}
	function work_img1($id)
	{
		return R::getCELL("SELECT work_img.scr FROM `work`,`work_img` WHERE work_img.id_work = $id AND `work`.`id` = $id");
	}

	function work($id)
	{
		return R::getROW("SELECT * FROM `work` WHERE `work`.`id` = $id");
	}

	function work_img($id)
	{
		return R::getAll("SELECT work_img.scr FROM `work`, `work_img` WHERE work_img.id_work = `work`.`id` and `work`.`id` = $id");
	}

	function get_table($table)
	{
		return R::getAll("SELECT * FROM $table");
	}
	function get_row($dbname,$id)
	{
		return R::getROW("SELECT * FROM $dbname WHERE `$dbname`.id = $id");
	}
	function get_row_add($dbname)
	{
		return R::getROW("SELECT * FROM $dbname");
	}
	function get_img($id)
	{
		return R::getALL("SELECT id,scr FROM work_img WHERE `$dbname`.id_work = $id");
	}
