<?php
class Columns {
	var $columnsId;
	var $columnsName;
	var $parentId;

	public function setColumnsId($columnsId) {
		$this->columnsId = $columnsId;
	}

	public function setColumnsName($columnsName) {
		$this->columnsName = $columnsName;
	}

	public function setParentId($parentId) {
		$this->parentId = $parentId;
	}

	public function getColumnsId() {
		return $this->columnsId;
	}

	public function getName() {
		return $this->columnsName;
	}

	public function getParentId() {
		return $this->parentId;
	}

	public function __toString() {
		return $this->columnsName . "  " . $this->parentId;
	}

}
?>