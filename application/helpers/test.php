<?php
include "ColumnsManager.php";

$manager = new ColumnsManager;
$arrayData = array(
	array("columnsId" => 1, "columnsName" => "root"  , "parentId" => 0),
	array("columnsId" => 2, "columnsName" => "leaf_1", "parentId" => 1),
	array("columnsId" => 3, "columnsName" => "leaf_2", "parentId" => 1),
	array("columnsId" => 4, "columnsName" => "leaf_3", "parentId" => 2),
	array("columnsId" => 5, "columnsName" => "leaf_4", "parentId" => 2),
	array("columnsId" => 6, "columnsName" => "leaf_5", "parentId" => 3),
	array("columnsId" => 7, "columnsName" => "leaf_5", "parentId" => 3),
	array("columnsId" => 8, "columnsName" => "leaf_5", "parentId" => 3),
	array("columnsId" => 9, "columnsName" => "leaf_5", "parentId" => 4),
	);
$manager->init($arrayData);
$manager->printColumnsArray();
print_r($manager->generateTree($manager->getArrayList()));
// $manager->getTreeByParentId(0);
	// echo "php build success!!!";
?>