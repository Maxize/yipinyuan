<?php
include "ColumnsManager.php";

$manager = new ColumnsManager;
$arrayData = array(
	1 => array("columnsId" => 1, "columnsName" => "root"  , "parentId" => 0),
	2 => array("columnsId" => 2, "columnsName" => "leaf_1", "parentId" => 1),
	3 => array("columnsId" => 3, "columnsName" => "leaf_2", "parentId" => 1),
	4 => array("columnsId" => 4, "columnsName" => "leaf_3", "parentId" => 2),
	5 => array("columnsId" => 5, "columnsName" => "leaf_4", "parentId" => 2),
	6 => array("columnsId" => 6, "columnsName" => "leaf_5", "parentId" => 3),
	7 => array("columnsId" => 7, "columnsName" => "leaf_5", "parentId" => 3),
	8 => array("columnsId" => 8, "columnsName" => "leaf_5", "parentId" => 3),
	9 => array("columnsId" => 9, "columnsName" => "leaf_5", "parentId" => 4),
	);

print_r($manager->generateTree($arrayData));

?>