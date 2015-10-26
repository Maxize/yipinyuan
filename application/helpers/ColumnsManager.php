<?php
include "entity/Columns.php";
class ColumnsManager {
	var $columnsArrayList;

	public function init($arrayData) 
	{
		$i = 0;
		foreach ($arrayData as $columnData) {
			$column = new Columns;
			$column->setParentId($columnData['parentId']);
			$column->setColumnsName($columnData['columnsName']);
			$column->setColumnsId($columnData['columnsId']);
			print_r($column);
			$this->addItem($column);
			$i++;
		}
	}

	public function printColumnsArray() {
		print_r($this->columnsArrayList);

	}

	public function getRoot() 
	{
		$columnItem = array();
		foreach ($this->columnsArrayList as $column) {
			$parentId = $column->getParentId();
			if (0 == $parentId) {
				$columnItem = $column;
			}
		}
		return $columnItem;
	}

	public function getChildById($parentId) 
	{
		$columnList = array();
		$i = 0;
		print_r($this->columnsArrayList);
		foreach ($this->columnsArrayList as $column) {
			if ($parentId == $column->getParentId()) {
				$columnList[$i] = $column;
			}
			$i++;
		}
		return $columnList;
	}

	/**
	 * [getTreeByParentId description]
	 * @param  integer $id [default 0 父节点id]
	 * @return [string]      [输出一颗str树]
	 */
	public function getTreeByParentId($id=0)
	{
		$treeArray = array();
		$treeArray = $this->get_array(0);
		print_r($treeArray);
	}


	function generateTree($items){
	    $tree = array();
	    foreach($items as $item){
	        if(isset($items[$item->getParentId()])){
	        	$objArray = get_object_vars($items[$item->getColumnsId()]);
	            $items[$item->getParentId()]['son'][] = $objArray;
	        }else{
	            $tree[] = &$items[$item->getColumnsId()];
	        }
	    }
	    return $tree;
	}	
/*
$items = array(
    1 => array('id' => 1, 'pid' => 0, 'name' => '安徽省'),
    2 => array('id' => 2, 'pid' => 0, 'name' => '浙江省'),
    3 => array('id' => 3, 'pid' => 1, 'name' => '合肥市'),
    4 => array('id' => 4, 'pid' => 3, 'name' => '长丰县'),
    5 => array('id' => 5, 'pid' => 1, 'name' => '安庆市'),
);
print_r(generateTree($items));

	 */
	public function get_array ($id = 0) {
		$arr = array();
		$result = $this->getChildById($id);
		if ($result && !empty($result)) {
			$rows = array();
			$arrayCount = count($result);
			$x = 0;
			while ($x < $arrayCount) {
				$rows = $result[$x];
				if (is_array($this->get_array($rows['columnsId']))) {
					$rows['list'][] = &$this->get_array($rows['columnsId']);
				} else {
					$rows[] = &$this->get_array($rows['columnsId']);
				}
				$arr[] = $rows;
				$x++;
			}
			return $arr;
		} 
	}

	public function addItem($item) {
		$count = count($this->columnsArrayList);
		$this->columnsArrayList[$count] = $item;
	}

	public function getArrayList() {
		return $this->columnsArrayList;
	}

}
?>