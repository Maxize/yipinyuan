<?php
include "entity/Columns.php";

class ColumnsManager {
	var $columnsArrayList;

	public function getRoot() 
	{
		$columnItem = array();
		foreach ($this->columnsArrayList as $column) {
			$parentId = $column['parentId'];
			if (0 == $parentId) {
				$columnItem[] = $column;
			}
		}
		return $columnItem;
	}

	public function getChildById($parentId) 
	{
		$columnList = array();
		$i = 0;
		foreach ($this->columnsArrayList as $column) {
			if ($parentId == $column['parentId']) {
				$columnList[$i] = $column;
			}
			$i++;
		}
		return $columnList;
	}

	/**
	 * 生成 树
	 * @param  [type] $items [description]
	 * @return [type]        [description]
	 */
	function generateTree($items)
	{
	    $tree = array();
	    foreach($items as $item){
	        if(isset($items[$item['parentId']])){
	            $items[$item['parentId']]['list'][] = &$items[$item['columnsId']];
	        }else{
	            $tree[] = &$items[$item['columnsId']];
	        }
	    }
	    $this->columnsArrayList = $tree;
	    return $tree;
	}	

}
?>